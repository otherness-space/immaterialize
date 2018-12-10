[![GitHub version](https://badge.fury.io/gh/otherness-space%2Fimmaterialize.svg)](https://badge.fury.io/gh/otherness-space%2Fimmaterialize)<!-- [![GitHub release](https://img.shields.io/github/release/otherness-space/immaterialize.svg)](https://github.com/otherness-space/immaterialize)-->
[![GitHub (pre-)release](https://img.shields.io/github/release/otherness-space/immaterialize/all.svg?style=social)](https://github.com/otherness-space/immaterialize)
[![GitHub license](https://img.shields.io/github/license/mashape/apistatus.svg)](LICENSE)

# Read Me

## TOC

##### [Quick Start](#quick-start-rewind) \| [About](#about-rewind) \| [Who](#who-rewind) \| [What](#what-rewind) \| [Where](#where-rewind) \| [Why](#why-rewind) \| [How](#how-rewind)

#### [Notes](#notes-rewind)

##### [Note 1](#note-1-rewind) \| [Note 2](#note-2-rewind)

#### [Appendix](#appendix-rewind)

##### [.gitattributes](#gitattributes-rewind) \| [.gitignore](#gitignore-rewind) \| [.exclude](#exclude-rewind)

### [Credits](#credits-rewind)

* * *

## Quick Start [:rewind:](#read-me)

Good Luck!

## About [:rewind:](#read-me)

This WP  theme is called Immaterialize, v-0.0.1-alpha. The theme is in some sort of alpha stage. The conceit of the theme is that it began as "a starter theme called `_s`, or `underscores`, if you like" which was downloaded, with sass installed, from <http://underscores.me/> and interlaced with Materialize, v1.0.0rc. "a modern responsive front-end framework based on Material Design." Therefore, "Immaterialize is based on [Underscores](https://underscores.me/), (C) 2012-2017 Automattic, Inc" with front-end framework Materialize.

Materialize, by Alvin Wang, Alan Chang, Alex Mark, and Kevin Louie, includes code from AnimeJS, the JavaScript Animation Engine by Julian Garner; Cash-dom by Ken Wheeler, Waves by Alfiana E. Sibuea and other contributors, and Normalize.css by Nicolas Gallagher and Jonathan Neal.

Names, licenses, and links are [credited below](#credits-rewind).

I have noticed that most of the third-party code that is utilized by Materialize is not up-to-date with each individual project's current version.

### Who [:rewind:](#read-me)

Your Mom.

### What [:rewind:](#read-me)

WP theme in some sort of alpha stage. While Materialize is registered and enqueued it has not been completely checked.
The plan

-   [x] Add PrismJS
-   [ ] Implement Materialize front end across /
    -   [ ] archive.php
    -   [x] comments.php
    -   [ ] footer.php
        -   [x] widget-title
    -   [ ] header.php
    -   [ ] index.php
    -   [ ] page.php
    -   [ ] search.php
    -   [ ] sidebar.php
    -   [ ] single.php
-   [ ] Implement Materialize front end across /inc
    -   [ ] custom-header.php
    -   [ ] customizer.php
    -   [ ] jetpack.php
    -   [ ] template-functions.php
    -   [ ] template-tags.php
        -   [x] switch spans to div
-   [ ] Implement Materialize front end across /template parts
    -   [ ] content.php
        -   [x] the_excerpt()
        -   [x] entry-footer
    -   [x] content-search.php
    -   [x] content-none.php
    -   [x] content-page.php
-   [ ] addtionals.css to accomodate implementing Materialize front end
    -   [x] Add file
    -   [x] flow-text class responsive styles as p element. CanIuse js to make p element load as flow-text class? If so which is lighter? Are there other ways?
    -   [ ] Default WP classes
        -   [x] site-branding
        -   [x] site-title
        -   [x] site-description
        -   [x] entry-title
        -   [x] entry-meta
        -   [x] @media site-description, entry-title, entry-meta for screen min-width
    -   [ ] Potential new classes
        -   [ ] entry-box
    -   [ ] New Classes
        -   [ ] Materialize responsive grid additions
            -   [x] offset-s2dot5
            -   [x] offset-m2dot5
            -   [x] offset-l2dot5
            -   [x] offset-xl2dot5
    -   [ ] Minimize notes
        -   [x] additionals.css w/ yui for content.php before enqueue and register
    -   [ ] SASS notes
        -   [ ] Empty
    -   [ ] functions.php
        -   [x] wp_register_style additionals.min.css
        -   [x] wp_enqueue_style additionals.min.css
        -   [x] add_action wp_enqueue_scripts additionals.min.css
        -   [ ] Empty
    -   [ ] Empty
-   [ ] Develop away from the underscores' basic Customizer using the elaborate [Make](https://thethemefoundry.com/wordpress-themes/make/), by The Theme Foundry, as a reference point.
    -   [ ] Typography
    -   [ ] Colors
-   [ ] Sketch out a more elaborate use of responsive delivery using Materialize.
-   [ ] Enable Materialize within existing barebones framework.
-   [ ] Elaborate the bare bones of the starter theme's framework.
    -   [ ] Posts
    -   [ ] Pages
    -   [ ] Events
    -   [ ] Custom Post Types
    -   [ ] User roles
-   [ ] HTML5 Boilerplate. Notes on html5-boilerplate branch [README.md](https://github.com/otherness-space/immaterialize/blob/html5-boilerplate/README.md).

### Where [:rewind:](#read-me)

### Why [:rewind:](#read-me)

Also Your Mom.

### How [:rewind:](#read-me)

How now?

* * *

## Notes [:rewind:](#read-me)

### Note 1 [:rewind:](#read-me)

### Note 2 [:rewind:](#read-me)

* * *

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

<https://git-scm.com/book/en/v2/Customizing-Git-Git-Attributes#Exporting-Your-Repository>

### .gitignore [:rewind:](#read-me)

### .exclude [:rewind:](#read-me)

* * *

### Credits [:rewind:](#read-me)

Third party resources applied in this theme. Each resource uses a GPL compatible license. The resources are listed according to each individual license, as noted, and have links where applicable.

-   Materialize, v1.0.0
    -   Copyright (c) 2014-2018
    -   [![GitHub release](https://img.shields.io/github/release/Dogfalo/materialize.svg?style=social)](https://github.com/Dogfalo/materialize/) [![GitHub forks](https://img.shields.io/github/forks/Dogfalo/materialize.svg?style=social)](https://github.com/Dogfalo/materialize/network) [![GitHub stars](https://img.shields.io/github/stars/Dogfalo/materialize.svg?style=social)](https://github.com/Dogfalo/materialize/stargazers) [![GitHub license](https://img.shields.io/github/license/Dogfalo/materialize.svg)](https://github.com/Dogfalo/materialize/blob/v1-dev/LICENSE)
-   anime.min.js, v2.2.0, JavaScript Animation Engine
    -   2017 Julian Garnier
    -   <http://animejs.com>
    -   <http://animejs.com/documentation/>
    -   [![GitHub release](https://img.shields.io/github/release/juliangarnier/anime.svg?style=social)](https://github.com/juliangarnier/anime) [![GitHub forks](https://img.shields.io/github/forks/juliangarnier/anime.svg?style=social)](https://github.com/juliangarnier/anime/network) [![GitHub stars](https://img.shields.io/github/stars/juliangarnier/anime.svg?style=social)](https://github.com/juliangarnier/anime/stargazers) [![GitHub license](https://img.shields.io/github/license/juliangarnier/anime.svg)](https://github.com/juliangarnier/anime/blob/master/LICENSE.md)
-   Cash-dom, 1.3.5
    -   Copyright (c) 2014-present Ken Wheeler
    -   [![GitHub release](https://img.shields.io/github/release/kenwheeler/cash.svg?style=social)](https://github.com/kenwheeler/cash) [![GitHub forks](https://img.shields.io/github/forks/kenwheeler/cash.svg?style=social)](https://github.com/kenwheeler/cash/network) [![GitHub stars](https://img.shields.io/github/stars/kenwheeler/cash.svg?style=social)](https://github.com/kenwheeler/cash/stargazers) [![GitHub license](https://img.shields.io/github/license/kenwheeler/cash.svg)](https://github.com/kenwheeler/cash/blob/master/LICENSE.md)
-   Waves, v0.6.4
    -   Copyright 2014 Alfiana E. Sibuea and other contributors
    -   <http://fian.my.id/Waves>
    -   [![GitHub release](https://img.shields.io/github/release/fians/Waves.svg?style=social)](https://github.com/fians/Waves) [![GitHub forks](https://img.shields.io/github/forks/fians/Waves.svg?style=social)](https://github.com/fians/Waves/network) [![GitHub stars](https://img.shields.io/github/stars/fians/Waves.svg?style=social)](https://github.com/fians/Waves/stargazers) [![GitHub license](https://img.shields.io/github/license/fians/Waves.svg)](https://github.com/fians/Waves/blob/master/LICENSE)
-   Normalize.css, v7.0.0
    -   Copyright © Aug 14, 2012-present Nicolas Gallagher and Jonathan Neal
    -   [![npm](https://img.shields.io/npm/v/normalize.css.svg?style=social)](https://www.npmjs.com/package/normalize.css) [![GitHub forks](https://img.shields.io/github/forks/necolas/normalize.css.svg?style=social)](https://github.com/necolas/normalize.css/network) [![GitHub stars](https://img.shields.io/github/stars/necolas/normalize.css.svg?style=social)](https://github.com/necolas/normalize.css/stargazers) [![GitHub license](https://img.shields.io/github/license/necolas/normalize.css.svg?style=social)](https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
-   PrismJS v1.15.0
    -   Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind. It’s used in thousands of websites, including some of those you visit daily.
    -   Copyright (c) 2012 Lea Verou
    - [https://prismjs.com/](https://prismjs.com/download.html#themes=prism-dark&languages=markup+css+clike+javascript+apacheconf+c+asciidoc+csharp+bash+cpp+coffeescript+clojure+ruby+css-extras+dart+django+docker+elixir+markup-templating+erlang+flow+git+go+less+haskell+java+json+julia+latex+markdown+liquid+lisp+makefile+erb+matlab+objectivec+pascal+perl+php+php-extras+sql+powershell+prolog+properties+scss+puppet+pure+python+r+jsx+typescript+rest+rust+sass+scala+scheme+plsql+swift+yaml+tsx+vim+wiki&plugins=line-highlight+line-numbers+custom-class+toolbar+jsonp-highlight+highlight-keywords+previewers+command-line+normalize-whitespace+keep-markup+copy-to-clipboard)
    -   [![Build Status](https://img.shields.io/travis/PrismJS/prism.svg?style=social)](https://travis-ci.org/PrismJS/prism) [![GitHub release](https://img.shields.io/github/release/PrismJS/prism.svg?style=social)](https://github.com/PrismJS/prism) [![npm version](https://img.shields.io/npm/v/prismjs.svg?style=social)](https://www.npmjs.com/package/prismjs) [![GitHub forks](https://img.shields.io/github/forks/PrismJS/prism.svg?style=social)](https://github.com/PrismJS/prism/network) [![GitHub stars](https://img.shields.io/github/stars/PrismJS/prism.svg?style=social)](https://github.com/PrismJS/prism/stargazers) [![GitHub license](https://img.shields.io/github/license/PrismJS/prism.svg?style=social)](https://github.com/PrismJS/prism/blob/master/LICENSE)
