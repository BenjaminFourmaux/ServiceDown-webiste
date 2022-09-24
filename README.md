# ServiceDown-website
Webiste of ServiceDown project
\
[![](https://badgen.net/badge/Service/Down/red)]()
[![](https://img.shields.io/badge/php-7.4-blue?logo=php&logoColor=white)]()
[![](https://img.shields.io/badge/Bootstrap-5-blueviolet?logo=bootstrap&logoColor=blueviolet)]()
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

![Banner](/views/assets/img/banner_github-white.png#gh-light-mode-only)
![Banner](/views/assets/img/banner_github-darkgrey.png#gh-dark-mode-only)

## Get stated :rocket:
### Installation
To install ServiceDown-website, you nee to install some things :
- A web server runing `PHP 7.4` (preferably IIS) 
- An URL rewriting rule (?controller=controllerName => /controllerName) exluding directory and file.
- Create a `.env.local` file at root if you use another settings, which contains properties:
  - `DEBUG`: boolean
  - `ENVIRONEMENT`: Local | Dev | Prod
  - `API_URI`: url of the [API](https://github.com/BenjaminFourmaux/ServiceDown-api)
  - `CDN_URI`: url of the CDN 

### Use
*Translate file* `core/translate/`

### Dependences
List of dependance used on this website :
- `AOS.js` (JS + CSS) (Animated On Scroll) via CDN
- `Bootsrap 5.1.3` (JS + CSS) via CDN
- `JQuery 3.6.0` via CDN
- `FontAwesome` Free kit
- `i18next 21.6.10` via CDN
- `JQuery-i18next 1.2.1` via CDN
- `i18nextBrowserLanguageDetector 6.1.3` via CDN
- `i18n` (Settings file) via CDN

## Roadmap
- [ ] Create pages:
  - [x] Home
  - [x] Services
  - [x] Search
  - [x] About
  - [ ] Contact
  - [ ] Service
- [ ] **v2** Partner programs page
- [ ] **v2** Login portal
- [ ] **v2** Account creation

## Version
[![](https://badgen.net/github/tag/BenjaminFourmaux/ServiceDown-website?cache=600)](https://github.com/BenjaminFourmaux/ServiceDown-website/tags)
[![](https://badgen.net/github/release/BenjaminFourmaux/ServiceDown-website?cache=600)](https://github.com/BenjaminFourmaux/ServiceDown-website/releases)
- [in progress][v1] Realse website with basic actions (see services, send report, see stats)
- [v1.1] Lang : `en`

## Contributors
[![](https://badgen.net/github/contributors/BenjaminFourmaux/ServiceDown-website)](https://github.com/BenjaminFourmaux/ServiceDown-website/graphs/contributors)
- :crown: [Benjamin Fourmaux](https://github.com/BenjaminFourmaux)
- :man_technologist: [CharlyDFlex](https://github.com/CharlyDFlex)

## Supporting
If you like this project and if you want, make a donation

[![](https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white)](https://streamlabs.com/techben-googlefanfr)

## Social Networks
[![](https://img.shields.io/youtube/channel/subscribers/UC6iaEEz7A21SfmGcbImpYDw?color=red&style=social)](https://www.youtube.com/channel/UC6iaEEz7A21SfmGcbImpYDw)
[![](https://img.shields.io/twitter/follow/BFourmaux?style=social)](https://twitter.com/BFourmaux)

[![](http://ForTheBadge.com/images/badges/built-with-love.svg)]()
