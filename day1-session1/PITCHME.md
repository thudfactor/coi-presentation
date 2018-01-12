# Project overview

---
## Environments

![Complete Environment](assets/image/project_overview.png)

+++

## Development Environment
![Deployment Environment](assets/image/development.png)

+++
## Deployment Environment
![Deployment Environment](assets/image/deployment.png)

---

## Architecture Goals

- Isolated theme, scripting, and design space |
- Shared development space to coordinate with teams |
- Test environment to preflight changes |
- Stable, shielded production environment |

+++

## Plan for carelessness

"Pay more attention" is not an effective error-reduction strategy.

- Automate as many common tasks as possible |
- Especially deployments |
- Provide common checkpoints |
- Separate design concerns from Drupal concerns |

+++

## First Rule of Deployment

![Code Moves Up](assets/image/files_up.png)

Code changes move _up_ from local development


+++

## Second Rule of Deployment

![Database Moves Down](assets/image/data_down.png)

+++ 

## Configuration is often data (sadly)

This means you must often make changes in production you might prefer to do in a development stage.

I often do the work in development, then duplicate the steps in production.

+++

## Room for improvement

The solution is to find a way to export configuration to code. Drupal 8 claims to do this, but we haven't found an effective workflow yet.

Getting this working to _your_ satisfaction is a good mid-term goal. [Here is a starting point.](https://www.drupal.org/docs/8/configuration-management/managing-your-sites-configuration)

---

---



## Tips!

<br>

@fa[arrows gp-tip](Press F to go Fullscreen)

@fa[microphone gp-tip](Press S for Speaker Notes)

---

## Template Features

- Code Presenting |
- Repo Source, Static Blocks, GIST |
- Custom CSS Styling |
- Slideshow Background Image |
- Slide-specific Background Images |
- Custom Logo, TOC, and Footnotes |

---?code=src/go/server.go&lang=golang&title=Golang File

@[1,3-6](Present code found within any repo source file.)
@[8-18](Without ever leaving your slideshow.)
@[19-28](Using GitPitch code-presenting with (optional) annotations.)

---

@title[JavaScript Block]

<p><span class="slide-title">JavaScript Block</span></p>

```javascript
// Include http module.
var http = require("http");

// Create the server. Function passed as parameter
// is called on every request made.
http.createServer(function (request, response) {
  // Attach listener on end event.  This event is
  // called when client sent, awaiting response.
  request.on("end", function () {
    // Write headers to the response.
    // HTTP 200 status, Content-Type text/plain.
    response.writeHead(200, {
      'Content-Type': 'text/plain'
    });
    // Send data and end response.
    response.end('Hello HTTP!');
  });

// Listen on the 8080 port.
}).listen(8080);
```

@[1,2](You can present code inlined within your slide markdown too.)
@[9-17](Displayed using code-syntax highlighting just like your IDE.)
@[19-20](Again, all of this without ever leaving your slideshow.)

---?gist=onetapbeyond/494e0fecaf0d6a2aa2acadfb8eb9d6e8&lang=scala&title=Scala GIST

@[23](You can even present code found within any GitHub GIST.)
@[41-53](GIST source code is beautifully rendered on any slide.)
@[57-62](And code-presenting works seamlessly for GIST too, both online and offline.)

---

## Template Help

- [Code Presenting](https://github.com/gitpitch/gitpitch/wiki/Code-Presenting)
  + [Repo Source](https://github.com/gitpitch/gitpitch/wiki/Code-Delimiter-Slides), [Static Blocks](https://github.com/gitpitch/gitpitch/wiki/Code-Slides), [GIST](https://github.com/gitpitch/gitpitch/wiki/GIST-Slides) 
- [Custom CSS Styling](https://github.com/gitpitch/gitpitch/wiki/Slideshow-Custom-CSS)
- [Slideshow Background Image](https://github.com/gitpitch/gitpitch/wiki/Background-Setting)
- [Slide-specific Background Images](https://github.com/gitpitch/gitpitch/wiki/Image-Slides#background)
- [Custom Logo](https://github.com/gitpitch/gitpitch/wiki/Logo-Setting), [TOC](https://github.com/gitpitch/gitpitch/wiki/Table-of-Contents), and [Footnotes](https://github.com/gitpitch/gitpitch/wiki/Footnote-Setting)

---

### Template Versions

- #### [Base Template  @fa[external-link gp-download]](https://gitpitch.com/templates/beige)
- #### [Code Maximized @fa[external-link gp-download]](https://gitpitch.com/templates/beige?p=codemax)
- #### [Speaker Notes @fa[external-link gp-download]](https://gitpitch.com/templates/beige?p=speaker)

---

### Questions?

<br>

@fa[twitter gp-contact](@gitpitch)

@fa[github gp-contact](gitpitch)

@fa[medium gp-contact](@gitpitch)

---?image=assets/image/gitpitch-audience.jpg

@title[Fork this Template!]

### <span class="white">Get your presentation started!</span>
### [Download this template @fa[external-link gp-download]](https://gitpitch.com/template/download/beige)

