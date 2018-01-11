<?php

namespace Drupal\coi_imports\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
use Drupal\migrate\MigrateSkipProcessException;

/**
 * Builds course table out of parsed SimpleXML.
 *
 * @MigrateProcessPlugin(
 *   id = "coursetablebuilder"
 * )
 */

class CourseTableBuilder extends ProcessPluginBase {

  private function table_header(){
        $table_header = '<thead>
            <th scope="col">Course ID</th>
            <th scope="col">Course Name</th>
            <th scope="col">Number of Credits</th>
            </thead>';
        return $table_header;
  }

  private function course_row($course){
        if ((int)$course->credits==0 && !$course->subject_code){
            $output = '<tr><td colspan="3">'.$course->name.'</td></tr>';
        }else{
            $credits = $code_number = '';

            if ((int)$course->credits>0){
                $credits = $course->credits.' credits';
            } 

            if (isset($course->subject_code) && strlen($course->subject_code)>0) {
                if ((int)$course->credits>0){
                    $code_number = '<a href="'.$course->url.'">'.$course->subject_code.'-'.$course->number.'</a>';
                }else{
                    $code_number = $course->subject_code.'-'.$course->number;
                }
                
            }

            $output = '<tr><th scope="row">'.$code_number.'</th><td>'.$course->name.'</td><td>'.$credits.'</td></tr>';
        }
        
        return $output;
  }

  private function process_course_array($course_array){
    $course_list = '<table>';
    $course_list .= $this->table_header();
    $course_list .= '<tbody>';
    foreach ($course_array as $course){
        $course_list .= $this->course_row($course);
    }
    $course_list .= '</tbody>';
    $course_list .= '</table>';
    return $course_list;
  }

private function process_requirement_list($requirement_list){
    $output = '';
    $output .= '<p><strong>'.$requirement_list->title.'</strong></p>';
    $courses_processed=false;
    foreach ($requirement_list->children() as $child){
        $type=$child->getName();
        if ($type=='content' ||$type == 'req_narrative'){
            $output.=strip_tags($child, '<p><a><table><tbody><tr><td>');
        }elseif ($type == 'course' && ! $courses_processed){
            $courses = $requirement_list->course;
            $output.= $this->process_course_array($courses);
            if ($requirement_list->req_note){
                $output.='<p>'.strip_tags($requirement_list->req_note, '<p><a><table><tbody><tr><td>').'</p>';
            }
            $courses_processed=true;
        }elseif($type == 'req_note' && !isset($requirement_list->course)){
            $output.='<p>'.strip_tags($requirement_list->req_note, '<p><a><table><tbody><tr><td>').'</p>';
        }elseif ($type == 'requirement_list'){
            $output.=$this->process_requirement_list($child);
        }
    }
    
    
    return $output;
}


  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    
    if (empty($value)) {
        throw new MigrateException('Required course content needed');
    }
        $return_html = '<h2>Courses and Requirements</h2>';
        $simple_xml = $value[0]; 
        $return_html .= '<a href="'.$simple_xml->url.'">View this degree in the course catalog</a>';
            foreach ($simple_xml->requirements as $requirements){
                $return_html .= '<h3>'.$requirements->title.'</h3>';
                if (isset($requirements->content)){
                    $return_html.=strip_tags($requirements->content, '<p><a><table><tbody><tr><td>');
                }
                if (count($requirements->requirement_list)){ //there are lists
                    foreach ($requirements->requirement_list as $requirement_list){
                            $return_html.=$this->process_requirement_list($requirement_list);//process requirement list
                    }
                } 
            }
        return $return_html;
  }

}
