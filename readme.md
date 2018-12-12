# Blank Slate

## Description

This WordPress plugin creates a page template giving you a blank page so only the content of the page is displayed. Header and footer are totally empty. This is great for page builders (Beaver Builder, Divi, etc), landing pages and squeeze pages.

[View on WordPress.org](https://wordpress.org/plugins/blank-slate/)

## Contributions
All pull requests are welcome!

### Translations
If you are interested in contributing a language translation:

- Read [this guide](https://make.wordpress.org/polyglots/handbook/tools/glotpress-translate-wordpress-org/).
- Go to [translate.wordpress.org](https://translate.wordpress.org/), select a language, and then find `Blank Slate` in the `Plugins` section to get started!

## Release Process

You must have commit access to both this GitHub repository and the WordPress.org SVN repository to do a release.

#### Prerequisites
- Install Node.js
- Run `npm install -g gulp`
- Run `npm install` from the project root

#### Checkout
- Run `gulp checkout` from the project root. This will create an `svn/` directory.

#### Check In
- Be sure that the version number in the plugin header file and the stable tag in the readme.txt file have been updated.  Add changelog and upgrade notice entries to the readme.txt file.
- Run `gulp` from the project root. This will overwrite all files in the `svn/trunk/` directory.
- Run `svn status` from the SVN directory to see the status of SVN files.
- Run `svn add {file}` to add any new files to the SVN directory.
- Run `svn delete {file}` to remove any old files from the SVN directory.
- Run `svn cp trunk tags/{version}` from the SVN root directory to tag a new release in SVN.
- Run `svn ci -m "{commit message}"` from the SVN root directory to commit changes to the WordPress plugin directory.
- Commit changes to git and push to GitHub. Create a new release on GitHub.
