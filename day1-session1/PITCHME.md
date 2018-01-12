# Project overview

---?image=assets/image/project_overview.png&size=auto 90%

+++?image=assets/image/development.png&size=auto 90%

+++?image=assets/image/deployment.png&size=auto 90%

---

## Architecture Goals

- Isolated theme, scripting, and design space |
- Shared development space to coordinate with teams |
- Test environment to preflight changes |
- Stable, shielded production environment |

+++

### Plan for carelessness

“Pay more attention” is not an effective error-reduction strategy.

- Automate as many common tasks as possible |
- Especially deployments |
- Provide multiple checkpoints |
- Separate design concerns from Drupal concerns |

+++

### First Rule of Deployment

![Code Moves Up](assets/image/files_up.png)

Code changes move _up_ from local development


+++

### Second Rule of Deployment

![Database Moves Down](assets/image/data_down.png)

+++ 

### Configuration is data

You must make admin-side config changes in production.

(This is alarming)

+++

### One Solution:

- Make the changes in development (or a multidev) |
- Recreate the changes in production |

This is a manual process and requires you to be careful

### Ideal Solution:

- Make the changes in development (or a multidev) |
- Export the configuration to code |
- Import the configuration in production |

This sounds good on paper

---

## Pantheon Environment

- Traditional dev, test, prod
- Dev works in either `git` or `sftp` mode
- We typically deploy with `git` via a CI process. <abbr title="about which more later also">ABMLA</abbr>
- Pantheon also offers `multidev`, a way to spin up extra development servers running on different codebases. ABMLA.

+++

### Pantheon Advantages

Pantheon helps meet many of our goals. 

- dev, test, prod to catch errors
- enforces changes to dev only
- provides robust backup and fallback options
- provides Drupal core updates

+++ 

### Pantheon weaknesses

- Project root is site root
- No solution for local development

(Acquia scores better here, but Pantheon wins in other areas).

---

## Local Dev

- Uses four separate Docker containers
  - Two repos for module and theme work (local Drupal)
  - Two repos for design work and page prototyping (Patternlab)
- Some extra command line tools / dependencies
  - Terminus
  - Composer
  - Make
  - Git
- Two Git repos on Gitlab.

+++?image=assets/image/docker.png
## What is Docker?

+++
### Drupal Repo

Contains: 

- Contains custom modules
- Some config files
- Composer.json file used to install modules on Pantheon
- Makefile with commands to make installing and updating this simple

+++

### Drupal CI 

On a commit to the master branch, the Drupal CI script runs to deploy modules and themes to Pantheon. We may look at this in greater detail later.

+++

### Patternlab Repo

Contains: 

- Example / Test design elements
- Javascript code for the site
- SVG Assets

+++

### Patternlab CI

On commit, Patternlab gets built and updated at http://newcity.gitlab.io/coi-styleguide/ with the help of a CI script.

It also triggers the Drupal CI script.  

---
## Next Section

[Day One, Session 2](https://gitpitch.com/thudfactor/coi-training?p=day1-session2)

