# Twig challenge <!-- Exercise title -->

<!-- ## published site -->

<!-- ## screenshot of user stories -->

<!-- ## link to the project board and tickets -->

### exercise in week 16 (10/01/2022 - 15/01/2022)<!-- NR (from date - to date)--> of our BeCode training
You can find the original exercise readme [by clicking here](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/3.The-Mountain/Symfony/3.Twig)

## Table of content

|     |                                                                         |
|-----|-------------------------------------------------------------------------|
| 1   | [Challenge](#challenge)                                                 |
| 2   | [The objective of this exercise](#the-objective-of-this-exercise)       |
| 3   | [The group](#the-group)                                                 |
| 4   | [Tools and languages used](#tools-and-languages-used)                   |
| 5   | [Timeline](#timeline)                                                   |
| 6   | [What I learned from this exercise](#what-i-learned-from-this-exercise) |
| 7   | [To Do](#to-do)                                                         |
| 8   | [Installation Instructions](#installation-instructions)                 |
|     |

## Challenge

Time for a new framework! After weeks of PHP we are getting started with one of its most popular frameworks,
namely, [Symfony](https://symfony.com/) (I will be using Symfony 6 throughout these exercises).
Our coaches have provided us with [a series of 3 exercises](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/3.The-Mountain/Symfony)
to get a basic understanding of how Symfony works and what it can do for us.  
In this final exercise of the series we will be:
* using the twig syntax to add content to our page
* style that content using css

## The objective of this exercise

Get a basic understanding of Twig and how it fares as a Template languages (compared to PHP)
We'll be working with the code from our first exercise [The MVC challenge](https://github.com/Sven-I-Am/challenge-symfony-mvc)

## The group
<!--give credit where it's due and link to group member's github pages-->
This is a solo exercise
## Tools and languages used

<!--Adjust the content of this table per exercise
Logos are added on a project basis, I have them stored in a separate folder locally, ready for copying-->

|                                           |                                             |                                         |
|-------------------------------------------|---------------------------------------------|-----------------------------------------|
| ![Ubuntu](./src/Assets/ubuntu-logo.png)   | ![phpstorm](./src/Assets/phpstorm-logo.png) | ![apache](./src/Assets/apache-logo.png) |
| ![Symfony](./src/Assets/symfony-logo.png) | ![composer](./src/Assets/composer-logo.png) | ![twig](./src/Assets/twig-logo.png)     |
| ![php](./src/Assets/php-logo.png)         | ![Git](./src/Assets/git-logo.png)           | ![github](./src/Assets/github-logo.png) |

## Timeline
<!-- fill in the timeline with what happened, challenges and how you overcame them, little victories, link to sources if possible -->
- day 1(:date: 12/01/2022):
    - having read the exercise readme, I created the repository, started a new symfony project and made the initial push
    - the exercise calls for us to use the code from the MVC challenge, so I copied the files where needed and ran the appropriate commands to get everything working
    - after testing the copied code everything works as intended, and I can start adding content through Twig
    - I added a footer with some content and styled it using bootstrap
    - I then added the <aside> and the menu block and using bootstrap styled it to be on the left of the page
    - I created a new file `src/Twig/RandomQuote.php` and in there I created a new Twig function based on the code provided [here](https://github.com/becodeorg/ANT-Lamarr-5.34/blob/main/3.The-Mountain/Symfony/3.Twig/quotes.php)
    - Since I have autowiring enabled Symfony automatically registered the function as a service, and I added it in my pages
    - After plating around with the styling some more I finished this exercise feeling like I have a basic understanding of Twig and what it can do

## What I learned from this exercise
<!--here you can write anything from a short summary on the subject of the exercise, a readable description of the new skills/knowledge you acquire, to an in depth clarification. As long as it helps you retain what you learned, or easily find the information when working on future projects-->
Using Twig makes the front-end of a php project that much simpler to code. The syntax is easy to learn and implement, the built-in functionality is extensive and I look forward to using it more often.

## To Do

This to do list is for personal use, the full to do list is added at the start of the challenge and as we complete
objectives they will be moved up into the timeline section and ticked off using emotes such as :heavy_check_mark:

<!--For now, this list is usually provided by BeCode and thus quite static. When working on outside projects, this list will become more dynamic as the projects grow and evolve-->

### Must-haves

* footer with @becode :heavy_check_mark:
* menu to the left with links to home and about pages :heavy_check_mark:
* on the about page: the date in 3 different formats below the existing menu (extending the block) :heavy_check_mark:
* on the homepage: set the name to be capitalised as John Smith, no matter how the user inputs :heavy_check_mark:
* add a random quote generator on each page below the main content :heavy_check_mark:

### Nice to have


## Installation Instructions
<!--write clear instructions on how to get your project working on the user's local environment-->
1. clone this repository to your local environment
2. have [Symfony CLI](https://symfony.com/doc/current/setup.html#technical-requirements) installed
3. make sure you are running Symfony 6 `symfony console --version` or `bin/console --version`
4. check that symfony is using php8.1 `symfony local:php:list`
5. if not update your php version and run `echo 8.1 > .php-version` in the project root folder
6. don't forget to run `composer install` in the project root folder
7. run `symfony server:start` to start the built-in dev-server