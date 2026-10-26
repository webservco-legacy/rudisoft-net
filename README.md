# RudiSoft.Net

The site of RudiSoft, my company of 2008 to 2011, in its versions on my own site engine (RudWEb 1 to 3), with the
subdomains that grew around it. A historical archive, kept read-only: the sites' code as it ran then, not safe to deploy
today.

## Branches

| Branch | What | Date |
|---|---|---|
| `rudihost-2008-09` | RudiHost, my hosting site on RudWEb 1 (pages, a sign-up form, the admin) | 2008-09 |
| `links-page-2008` | the one-page site of the RudiSoft hosts (the main host and the labs host) | 2008-11 to 2009-03 |
| `rudweb2-site-2009` | the company site on RudWEb 2 | 2010-03 |
| `main` | the site on RudWEb 3 (Smarty templates), a temporary page, and the internet radio's player page (now playing, the programme, listener statistics from Icecast, a jPlayer skin) | 2010-09 to 2010-12 |

## History

| Date | Commit | |
|---|---|---|
| 2008-09-29 | 877bad0 | RudiHost as of 2008-09-29 (`rudihost-2008-09`) |
| 2008-11-08 | 05b3978 | the links page (`links-page-2008`) |
| 2009-03-23 | 28ac833 | its last state |
| 2010-03-20 | 3a29b1f | the site on RudWEb 2 (`rudweb2-site-2009`) |
| 2010-09-29 | 66753a0 | the site on RudWEb 3 (`main`) |
| 2010-12-06 | ffbf4b0 | the radio's player page |
| 2010-12-18 | 471fb55 | the last revision |

## How it was built

`main` from the dump of my SVN repository (revisions 1 to 34; the `git-svn-id` lines name them); the three other
branches from copies of the sites made before it. Turned into git in 2026 (33 commits), the dates kept. The
last commit of each branch sets LF line endings and indents with spaces. Database passwords in the configs read
`REDACTED`.

Left out of the whole history: a web template downloaded for the radio page (a zip), two web fonts converted for Cufón
(Myriad Pro, not free to redistribute: the radio page falls back to the browser's font), a calendar script whose
licence does not allow redistribution, RudiHost's server configuration (a free host's account), a greeting card picture of the links page and a control
panel picture of RudiHost's content. A former client's
name in one page of the history reads `travel-agency`.

## Third-party code

Smarty 2 (LGPL) and Bitstream Vera Sans Mono (Bitstream Vera licence) in `rwlib/3rdparty/`; FCKeditor 2 (GPL, LGPL or
MPL, its `license.txt`), Prototype, script.aculo.us and moo.fx (MIT), and Lightbox (CC BY 2.5) in RudiHost; jPlayer
1.2.0 (MIT or GPL, with its release zips) and Cufón (MIT) on the radio page.

## Licence

New BSD (see `LICENSE`), added in 2026 as a file: the headers of the radio's and the engine's code name it. The logos
and the layout graphics are mine.

See also the framework's eras in [webservco-legacy](https://github.com/webservco-legacy), from
[rudweb-2007-2009](https://github.com/webservco-legacy/rudweb-2007-2009) to
[web-2012-2017](https://github.com/webservco-legacy/web-2012-2017).
