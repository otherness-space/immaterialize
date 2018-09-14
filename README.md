[![GitHub version](https://badge.fury.io/gh/otherness-space%2Fimmaterialize.svg)](https://badge.fury.io/gh/otherness-space%2Fimmaterialize)
[![GitHub license](https://img.shields.io/github/license/mashape/apistatus.svg)](LICENSE)


# Read Me

## TOC
##### [Quick Start](#quick-start-rewind) | [About](#about-rewind) | [Who](#who-rewind) | [What](#what-rewind) | [Where](#where-rewind) | [Why](#why-rewind) | [How](#how-rewind)

#### [Notes](#notes-rewind)

##### [Note 1](#note-1-rewind) | [Note 2](#note-2-rewind)

#### [Appendix](#appendix-rewind)
##### [.gitattributes](#gitattributes-rewind) | [.gitignore](#gitignore-rewind) | [.exclude](#exclude-rewind)

### [Credits](#credits-rewind)
-----------------------------------------------------------------------------------------------------------------------
## Quick Start [:rewind:](#read-me)

Good Luck!

## About [:rewind:](#read-me)

This WP  theme is called Immaterialize, v-0.0.1-alpha. The theme is in some sort of alpha stage. The conceit of the theme is that it began as "a starter theme called `_s`, or `underscores`, if you like" which was downloaded, with sass installed, from http://underscores.me/ and interlaced with Materialize, v1.0.0rc. "a modern responsive front-end framework based on Material Design." Therefore, "Immaterialize is based on [Underscores](https://underscores.me/), (C) 2012-2017 Automattic, Inc" with front-end framework Materialize.

Materialize, by Alvin Wang, Alan Chang, Alex Mark, and Kevin Louie, includes code from AnimeJS, the JavaScript Animation Engine by Julian Garner; Cash-dom by Ken Wheeler, Waves by Alfiana E. Sibuea and other contributors, and Normalize.css by Nicolas Gallagher and Jonathan Neal.

Names, licenses, and links are [credited below](#credits-rewind).

I have noticed that most of the third-party code that is utilized by Materialize is not up-to-date with each individual project's current version.

### Who [:rewind:](#read-me)

Your Mom.

### What [:rewind:](#read-me)

WP theme in some sort of alpha stage. While Materialize is registered and enqueued it has not been completely checked.
The plan
- [x] Add PrismJS
- [ ] Implement Materialize front end across /
  - [ ] archive.php
  - [x] comments.php
  - [ ] footer.php
    - [x] widget-title
  - [ ] header.php
  - [ ] index.php
  - [ ] page.php
  - [ ] search.php
  - [ ] sidebar.php
  - [ ] single.php
- [ ] Implement Materialize front end across /inc
  - [ ] custom-header.php
  - [ ] customizer.php
  - [ ] jetpack.php
  - [ ] template-functions.php
  - [ ] template-tags.php
    - [x] switch spans to div
- [ ] Implement Materialize front end across /template parts
  - [ ] content.php
    - [x] the_excerpt()
    - [x] entry-footer
  - [x] content-search.php
  - [x] content-none.php
  - [x] content-page.php
- [ ] addtionals.css to accomodate implementing Materialize front end
  - [x] Add file
  - [x] flow-text class responsive styles as p element. CanIuse js to make p element load as flow-text class? If so which is lighter? Are there other ways?
  - [ ] Default WP classes
    - [x] site-branding
    - [x] site-title
    - [x] site-description
    - [x] entry-title
    - [x] entry-meta
    - [x] @media site-description, entry-title, entry-meta for screen min-width
  - [ ] Potential new classes
    - [ ] entry-box
  - [ ] New Classes
    - [ ] Materialize responsive grid additions
      - [x] offset-s2dot5
      - [x] offset-m2dot5
      - [x] offset-l2dot5
      - [x] offset-xl2dot5
  - [ ] Minimize notes
    - [x] additionals.css w/ yui for content.php before enqueue and register
  - [ ] SASS notes
    - [ ] Empty
  - [ ] functions.php
    - [x] wp_register_style additionals.min.css
    - [x] wp_enqueue_style additionals.min.css
    - [x] add_action wp_enqueue_scripts additionals.min.css
    - [ ] Empty
  - [ ] Empty
- [ ] Develop away from the underscores' basic Customizer using the elaborate [Make](https://thethemefoundry.com/wordpress-themes/make/), by The Theme Foundry, as a reference point.
  - [ ] Typography
  - [ ] Colors
- [ ] Sketch out a more elaborate use of responsive delivery using Materialize.
- [ ] Enable Materialize within existing barebones framework.
- [ ] Elaborate the bare bones of the starter theme's framework.
  - [ ] Posts
  - [ ] Pages
  - [ ] Events
  - [ ] Custom Post Types
  - [ ] User roles
- [ ] HTML5 Boilerplate. Notes on html5-boilerplate branch [README.md](https://github.com/otherness-space/immaterialize/blob/html5-boilerplate/README.md).


### Where [:rewind:](#read-me)


### Why [:rewind:](#read-me)

Also Your Mom.

### How [:rewind:](#read-me)

How now?

________________________________________________________________________________
## Notes [:rewind:](#read-me)

### Note 1 [:rewind:](#read-me)


### Note 2 [:rewind:](#read-me)

________________________________________________________________________________
## Appendix [:rewind:](#read-me)

### .gitattributes [:rewind:](#read-me)

> Git attribute data also allows you to do some interesting things when exporting an archive of your project.

```markdown
.git                    export-ignore
.gitignore              export-ignore
.gitattributes          export-ignore
.travis.yml             export-ignore
codesniffer.ruleset.xml export-ignore
```

https://git-scm.com/book/en/v2/Customizing-Git-Git-Attributes#Exporting-Your-Repository

### .gitignore [:rewind:](#read-me)


### .exclude [:rewind:](#read-me)

________________________________________________________________________________

### Credits [:rewind:](#read-me)

Third party resources applied in this theme. Each resource uses a GPL compatible license. The resources are listed according to each individual license, as noted, and have links where applicable.

* Copyright (c) 2014-2018 Materialize, v1.0.0-beta
  * https://github.com/Dogfalo/materialize
  * <a href="https://cdnjs.com/libraries/materialize">
    <img src="https://img.shields.io/cdnjs/v/materialize.svg" alt="CDNJS version badge"></a>
  </a>
  * MIT
* anime.min.js, v2.2.0, JavaScript Animation Engine
  * 2017 Julian Garnier
  * http://animejs.com
  * http://animejs.com/documentation/
  * https://github.com/juliangarnier/anime
  * <a href="https://github.com/juliangarnier/anime/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/mashape/apistatus.svg" alt="license badge"></a>
* Cash-dom, 1.3.5
  * Copyright (c) 2014-present Ken Wheeler
  * https://github.com/kenwheeler/cash
  * <a href="https://github.com/kenwheeler/cash/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/mashape/apistatus.svg" alt="license badge"></a>
* Waves, v0.6.4
  * Copyright 2014 Alfiana E. Sibuea and other contributors
  * http://fian.my.id/Waves
  * ![GitHub forks](https://img.shields.io/github/forks/badges/shields.svg?style=social&label=Fork)(https://github.com/fians/Waves)
  * <a href="https://github.com/fians/Waves/blob/master/LICENSE"><img src="https://img.shields.io/github/license/mashape/apistatus.svg" alt="license badge"></a>
* Normalize.css, v7.0.0
  * Copyright © Aug 14, 2012-present Nicolas Gallagher and Jonathan Neal
  * <a href="https://www.npmjs.com/package/normalize.css"><img src="https://img.shields.io/npm/v/normalize.css.svg?style=flat-square" alt="npm version badge"></a>
  * <a href="https://github.com/necolas/normalize.css/blob/master/LICENSE.md"><img src="https://img.shields.io/npm/l/normalize.css.svg?style=flat-square" alt="license badge"></a>
* PrismJS v1.14.0
  * Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind. It’s used in thousands of websites, including some of those you visit daily.
  * Copyright (c) 2012 Lea Verou
  * https://prismjs.com/
  * <a href="https://github.com/necolas/normalize.css/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/mashape/apistatus.svg" alt="license badge"></a>
