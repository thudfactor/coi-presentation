# Basic Sass and Twig

---

## Whirlwind introduction to SASS

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

+++

### Functions

Functions take arguments and return a value. 

```
@function strip-unit($num) {
  @return $num / ($num * 0 + 1);
}
```

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

`@extend` appends the current selector to the selector of the @extend rule. This is not as good an idea as it sounds.

+++

### Loops

```
@for $i from 1 through 6 {
	h#{$i} {
		@include fontstyle("h#{$i}");
		margin: rem-calc(8 0);
	}
}
```

### More information on Sass

Documentation & more: http://sass-lang.com/
