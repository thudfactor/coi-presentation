# Project overview

---image=image/project_overview.png&size=auto 90%

+++image=assets/image/development.png&size=auto 90%

+++image=assets/image/deployment.png&size=auto 90%

---

## Architecture Goals

- Isolated theme, scripting, and design space |
- Shared development space to coordinate with teams |
- Test environment to preflight changes |
- Stable, shielded production environment |

+++

### Plan for carelessness

"Pay more attention" is not an effective error-reduction strategy.

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

### Configuration is often data (sadly)

This means you must often make changes in production you might prefer to do in a development stage.

I often do the work in development, then duplicate the steps in production.

+++

### Room for improvement

The solution is to find a way to export configuration to code. Drupal 8 claims to do this, but we haven't found an effective workflow yet.

Getting this working to _your_ satisfaction is a good mid-term goal. [Here is a starting point.](https://www.drupal.org/docs/8/configuration-management/managing-your-sites-configuration)

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

+++ 
## What is Docker?

+++
### Drupal Repo

+++

### Patternlab Repo

