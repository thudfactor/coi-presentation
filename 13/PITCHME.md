# Content types

### Entities: nodes, paragraphs, and more

---

## Vocabulary

<dl>
  <dt>Entity Type</dt>
  <dd>“A useful abstraction to group together fields.” Nodes, Comments, Files, Users, etc.</dd>
  <dt>Bundle</dt>
  <dd>An entity type with specific fields attached. For example, “Graduate Program.”</dd>
  <dt>Field</dt>
  <dd>A reusable piece of content that can be added to any bundle.</dd>
  <dt>Entity</dt>
  <dd>An instance of an entity type. (Content filled out.)</dd>
</dl>

+++

### Create a new content type.

Go to Structure, Content Types, Add Content Type. Create a name for your content type.  

**We will be using this in the templating work tomorrow.**

+++

### Add a field

1. Click the "add field" button
2. For now, just select any field type from "General" or "Number" sections.
3. Give it a label. You will each to give it a different label.
4. Click "Save and continue."

+++
### Configure the field

4. Decide whether the field should have a single value or multiple. (This is not a thing you can change later.) 
5. Click "Save field settings."
6. Now you can make additional configuration options. These can change later.
7. Click "Save settings."

+++ 

### Now make a few more

Take about ten minutes and make a few more of these.

---

## Add vs Re-use

Re-use fields when possible. 

- shares templates
- makes cross-bundle views easier
- reduces database complexity

+++

### Reuse a field

1. Select "Image: field_image" 
2. Give it a new label (or accept the default)
3. You skip straight to the big settings screen
4. Click "save settings."

---

## Content Type Tabs

- Edit |
- Manage fields (currently on) |
- Mange form display |
- Manage display |

+++

### Manage form display

Controls how all the fields display on the content manager's screen.

- Order of the fields |
- What widget to use |
- Field settings (hidden behind the gear) |

+++
### Manage display

Controls what's available to templates and default field order

- Disabling Fields |
- Format |
- Display settings |
- Order probably overridden |
- Field groups aren't used |

+++

### NewCity philosophy on display in Drupal:

Keep as much design in code as possible

---

## The Paragraphs module

“Paragraph” is a field type that contains references to an **entity type** of "Paragraph Type," which can have many bundles. It has a simple interface for content managers. 

- Benefit: very simple interface
- Drawback: no content reuse

+++

### Creating a new paragraph type

1. Go to “Structure -> Paragraph types”
2. Click “Add paragraph type”
3. Continue as though you were making a content type.

+++

### Adding a paragraph field 

1. “Structure -> Content Types -> [your content type] -> Manage fields”
2. Click “Add field”
3. Select “Paragraph” from the “Add a new field” dropdown.
4. “Save Field Settings”
5. Make selections from the “Reference Type” section.

### Using the paragraph field

Now create a new entity of your content type and try out the paragraph field.

---

## Entity Construction Kit (ECK)

ECK lets you create entity types and bundles on those types.

- Benefit: significant content reuse
- Drawback: More complicated user experience

+++ 

### Creating a new Entity Type

1. “Structure -> ECK Entity Types”
2. “Add Entity Type”
3. Type a label and select base fields

The “Title” field is tricky…

+++

### Creating a bundle

1. From the dropdown on the “Operations” button, click “bundle list”
2. “Add Aside Blocks bundle”
3. Proceed as though for a content type

+++

### Adding an Entity Type field

1. “Manage fields” of your content type.
2. Select “Content” from the “Add a new field” dropdown.
3. Select your Entity Type from the “Content” subgroup of the “Type of item to reference” field.
4. Select bundles from the list on the configuration screen.

+++

### Entity Type creation considerations

- A content reference field can only target one entity type
- Field types can only be reused in the same entity type
- Field names must be unique within an entity type

---

## Next Section

[Day One, Session 4](https://gitpitch.com/thudfactor/coi-training?p=14)


