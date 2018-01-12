# Working in Pantheon

---

We're going to spend some time now looking at Pantheon together. So log in: 

https://dashboard.pantheon.io/login

---

## Authentication stuff 

We don't need this stuff for today, but we will tomorrow. Let's double-check and make sure you have

- An associated SSH Key
- Terminus installed
- Can authenticate Terminus from the command line

+++

### Checking SSH

1. Click the "Account" tab
2. In the vertical tabs, click "SSH Keys"

If you don't have an SSH Key listed here, try to get that set up before tomorrow. 

+++

### Installing / Authenticating with Terminus

Click the "Advanced" tab for instructions on how to install and authenticate. 

---

## Getting our Bearings

You should have access to the College of Idaho site from your dashboard. Click that now. 

+++

### Global navigation

First, let's look at the stuff along the top.

- Environment Tabs |
- Workflows |
- User Menu |

+++

### Environment features

Everything below the environment tabs affect that environment only.

- "Visit" buttons |
- "Locked," "Connection Info," "Clear Caches" |

<span class="fragment">**Click each of the environments tabs and see what changes.**</span>

+++ 

### Code screen

**Click back to the dev environment.**

- "CI Bot" commits are incoming changes from Gitlab
- "Pantheon" commits are usually upstream changes
- Other kinds of commits are very rare

+++

### Development Mode Toggle

Changes how you interact with the code. 

+++

### Database / Files Tab

Use this to copy the database and files to Dev from either Live or Test. 

+++

### Backups

Use this to create or download a backup. 

- The backup process is used for local development.
- Daily backups are only enabled for Live right now.

+++

### NewRelic

We don't make much use of this (yet) but it can be a very useful monitoring / debugging tool.

---

## Let's do a thing

One person:

1. Make sure you are on the dev tab |
2. Click the "Site Admin" tab |
3. Log into your account here |
4. Now make a dramatic change to the home page |
5. Look at the live site to prove to yourself it is different. |

+++

### Let's do another 

One person:

1. Go back to the Pantheon tab |
2. Click the "Database / Files" vertical tab |
3. Clone the database from Live to Dev, then run update.php and clear caches. |
4. What's happening now? |
5. Look at the front page of the dev site again. It should look like the live site.

+++

### Configuration in Dev

- Dev config changes get stomped regularly
- For lengthy experiments, use Multidev or local dev

--- 

## Upgrading Drupal

1. Click the "Multidev" tab 
2. Select "eight-four"
3. What do you see here?

---

## Pushing code 

1. Click the "Test" tab
2. Click the "Deploys" tab

Test should report that there are some commits ready to deploy. One person can do this now.

+++ 

### Live to Test

- It works the same way.
- You can only deploy from "Test."

+++

### Important Tips

Don't let experimental code hang out in Dev. It could get launched by someone else. **What should you use instead?**

Remember: Code up, Database Down

---

## Working in Multidev

Because Dev is on the publishing pipeline, we want to make a new Multidev environment to work from. 

One person:

1. Click the "Multidev" tab
2. Click the "Create Multidev Environment" button
3. In the "Name" field type "training"
4. Click "Create Environment"

+++

### What's happening

1. A new branch called `training` is being created in Git.
2. A new server & database is being created.
3. The site from dev is being cloned into it.
4. Unique SFTP / Connection strings are created for the site
5. When done, the site will be available at http://training-college-of-idaho.pantheonsite.io






