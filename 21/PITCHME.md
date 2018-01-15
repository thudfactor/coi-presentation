# PatternLab and SCSS

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

---

## Getting started with SASS

- Visit https://codepen.io/thudfactor/pen/dJjEWO and click the "Fork" button

+++

### Nesting selectors

```
.news-teaser__art {
  img {
    max-width: 100%;
  }
}
```

+++ 

### Context selectors

```
.news-teaser__art {
  > img
}
```

+++


### Self-selector: &

``` 
.news-teaser__art {
	img {
		max-width: 500px;
	}	
	
	&.news-teaser__art--small {
		img {
			max-width: 300px;	
		}
	}
}
```

@[6-10]

+++?code=src/scss/_unit.scss

### Functions

Functions take arguments and return a value. 

@[26-55]

+++

### Using variables 

```
$color-shade: #ccc;

.news-teaser__art {
  background-color: $color-shade;
}
```

+++?code=src/scss/_foundation-settings.scss

### Foundation Settings Override

+++

### Mixins

Mixins are something like macros.

```
@mixin full_width_block {
  display: block;
  width: 100%
}

.news-teaser__art {
  img {
    @include full_width_block;
  }
}
```

+++?code=src/scss/_m_typography.scss

### Typography mixin  

+++

### @extend

```
.news-meta {
  font-size: 12px;
  font-weight: bold;
}

.news-summary {
  @extend .news-meta;
}
```

`@extend` is a dangerous tool; it can quickly bloat CSS selectors.

+++



