# Advanced content topics

---

## Paragraphs vs Entities

- Paragraphs are great for fragmentary content, like the parts of an article.
- Entities are great for reusable units. 
- Entities can be referenced in Paragraphs, Paragraphs in entities.
- Some people use only one; we think they have different use cases.

+++

## College of Idaho Entities

- Headers |
- Components |
- Aside Blocks |

+++

## College of Idaho Paragraphs

- Block / Editorial pairs |
- Editorial |
- Full-Width Block |

<span class="fragment">Paragraphs are used to replace WYSIWYG templates / inline placement of markup.</span>

---

## Improving content entry

We can make complicated content types less painful to use with field groups.

+++

### Field groups

1. “Manage Form Display” of your content type
2. Click “Add group”
3. Select “Fieldset”
4. Grab some of your fields and move them under and to the right of the fieldset.
5. Click “Save”

+++

### Two-tiered groups

1. “Manage Form Display” of your content type
2. Click “Add group”
3. Select “Tabs” and configure it.
4. Click “Add group” again.
5. Select “Tab” and configure it. Repeat 4-5 a couple more times.
6. Populate each tab and save.

+++

### Things about groups

- Purely cosmetic 
- No effect on the database 
- No effect on presentation, variable names, etc
- You can move grouped fields together as one

+++

### Display groups

- Display groups do affect output
- We don't use them because we keep layout in code

---

## Display modes

We can be more flexible about content presentation by using display modes.

---

### See display modes for a CT

1. “Manage Display” of your content type
2. Click the “Teaser” tab above the breadcrumb. This is the “Teaser” display.
3. Click “Custom display settings”
4. Check one of these boxes, then “Save.”
5. A new tab will appear above the breadcrumb.

+++

### About Display Modes More Later Also

These really come into their own in templates and views,

---

## Views

“Views” are how we query the content in a Drupal database. 

+++

### Creating a view

1. Go to “Structure -> Views”
2. Click “Add View”
3. Pick a name
4. All the other options can be changed

+++

### Block vs Page view

1. Pages get a URL
2. Blocks get a block created on the block management screen
3. Pick “Create a page” only for now.
4. Better go ahead and give it a page title and path
5. Leave the rest

---

## Parts of a View

Views are organized logically by column.

- Title
- Format
- Fields
- Filter Criteria
- Sort Criteria

+++

### Second column

- Page settings
- Header
- Footer
- No Results
- Pager
- Meta Tags

+++

### Advanced column

- Contextual filters
- Relationships
- Exposed Form
- Other

---

[Day Two, Session 1](https://gitpitch.com/thudfactor/coi-training?p=21)
