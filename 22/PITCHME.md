# Patternlab

---

## What is Patternlab?

Patternlab is an open-source tool used to create styleguides.

- It comes in PHP and Node flavors
- NewCity has augmented it with our standard tooling

+++

### Patternlab conventions

- “Atoms, Molecules, Organisms”
- Should make creating new components easier
- Can use it to document the end product

+++

### Patternlab for CMS integration

- Easier to come up with test cases
- You can fake data backing (a bit)
- Copy/Paste CMS-generated code to write CSS to that

+++

## Brief tour of Patternlab for College of Idaho

+++

### Pattern organization

- Files are in `src/patterns/`
- Then “atoms,” “molecules,” “organisms,” “templates,” “pages”
- Then subgroups
- Numbers before names are optional, but help sort.
- Stylesheets mirror patterns (for the most part)

---

## Example patterns

We're going to take a tour through some example patterns.

- Simple patterns
- Complex patterns
- Layout patterns

---?code=src/twig/cite.twig

Citation pattern

+++ 

### Include statement

```twig
{% include 'atoms-cite' %}
```

Provide a name:

```twig 
{% include 'atoms-cite' with {citation: 'Yogi Berra'} %}
```

---?code=src/twig/heading.twig&lang=twig

Heading pattern with optional level, linked text.

+++

### Spaceless

The `{% spaceless %}` block strips out line breaks and extraneous white space during compilation.

---?code=src/twig/headline-group.twig&lang=twig

---?code=src/twig/00-editorial.twig&lang=twig

+++?code=src/twig/00-editorial.json&lang=json

+++?code=src/twig/00-editorial~asides-only.json&lang=json

---?code=src/twig/00-editorial.twig&lang=twig

+++

### Embed

- Similar to `include`, but has an end tag.
- Can also pass variables
- `block` tags can override content in the embedded pattern.

---?code=src/twig/30-with-sidebar.twig



