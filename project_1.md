# Why doesn't everyone love Pokemon?

- **Distributed:** *September 28th*
- **Due:** *October 12th*

### Description:

After the falling excitement of Pokemon Go from the summer, Nintendo of America has decided to hire web developers to raise the web presence of the great and exciting world of Pokemon. Nintendo of America is hoping that you will be able to provide a place for fans of Pokemon to come together and bask in their glory. They also want things to be very organized and segmented properly, so they are asking for you to create a website for an individual Pokemon.

### Spec:

- Create a website promoting the glory of your favorite Pokemon
- There should be at least 5 interconnected web pages:
  - Homepage (index.html)
    - basic page, sets standard for the rest of the pages to follow
    - at least one image of your chosen Pokemon
    - the slogan of the club
    - 'upcoming events'
  - About the club (about.html)
    - some information about the club (where they meet IRL, where all their gold is hidden)
    - what the club hopes to accomplish
    - list some of the club members with images (if available) and links to their accomplishments
  - About the Pokemon (${pokemonName}.html)
    - general information about it's evolutionary line and other similar Pokemon
    - powers/strengths - why is this Pokemon the best?
    - weaknesses - which Pokemon should we eradicate so that yours can reign supreme
    - trivia - any other bits of information that will help convince others to lend their support
  - Register new users (join.html)
    - a page holding a form for visitors to join
    - must require a user to register with a valid
      - username
      - password
      - first name/last name
      - e-mail
      - date of birth
      - gender
      - requested title
      - Credit card number
      - favorite type of apple (something in a select box)
    - if the user is already logged in, the page says thanks for supporting
  - Sitemap (sitemap.html)
    - a simple page listing all of the websites pages that can be reached
- Each page should use one general style sheet (club-general.css) that applies a thematic flow to the pages
  - i.e. If I choose to have a fan club for WarGreymon my club-general.css would apply to all of my pages:
    - a yellow background
    - curved, pointy, dinosaur talon-y font
    - steel/metallic colored font for exciting headings
    - maybe some cool metal looking :hover for my links
    - *obviously, you won't be able to use WarGreymon, he's a Digimon*
  - the club-general.css will be linked by every page, give it broad enough rules that will be used everywhere
  - pages may have individual stylesheets (i.e. club-about.css), but no in-line style attributes

## Expectations:

- work in groups of up to 4 people
- html pages will be html5 compliant (tested [here][html5])
- css pages will be css3 compliant (tested [here][css3])
- all source code will show proper/consistent formatting
- no erroneous red code in firefox html preview
- web site will be hosted on people.emich

## Deliverables:

- Final Project:
  1. Print out of all source code due 7:20pm on the 12th
  1. Demo/walkthrough in class
  1. Individual writeup of the responsibilities for the group members

## Requirements for success:

- Regex validation on registration form
- Cookie store for registered users

### Legal Notice

*Please appropriately cite text/images taken straight from wikipedia and other sites*

[html5]: https://validator.w3.org/
[css3]: https://jigsaw.w3.org/css-validator/
