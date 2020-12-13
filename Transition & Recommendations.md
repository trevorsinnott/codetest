-   Tailwind CSS
    -   My preferred CSS tool for Laravel

# Plan of Attack:

-   Set up controller and view template for "My Teams"
-   Set up controller and view template for "Create Hero"
-   Set up Heroes table and migrate
-   Take values from "Create Hero" and create new hero in database

# Transition:

## What was I able to complete?

I was able to create:

-   The controllers and basic routing for "/myheroes" and "/myheroes/createhero"
-   The basic inputs for the form at "/myheroes/createhero"
-   The Hero model
-   Set up the create_heroes_table migration and CreateheroController only for superHeroName

## What do you feel is still needed

We still need to:

-   Complete setting up the create_heroes_table migration and CreateheroController for the remaining Hero attributes
-   Add the success message and routing back to create more heroes after succesfully creating a hero
-   Set up user authentication and establish relationship between a user and team
    -   Teams have many users and heroes
    -   User have one team
    -   Heroes have many teams
-   Set up teams, including routing views and controllers for "/myheroes/createteam"
-   Add ability to calculate superhero's combat power, and to sum a teams combat power

# Recommendations:

## What would you do differently?
- Set up users and authentication first
- Have certain attributes be limited to existing values with sub attributes to create a more cohesive way to calculate battle power and eventually expand on battle results
- Create a way to have individual heros battle

## What would you add to the points listed below?
- Controller - Any input validation, security, documentation etc...
  - Validate inputs based on type/required/length
  - check for user authorization to determine whether to let them create a team
- Model - Any input validation, security, documentation etc...
  - 
- View - Any input validation, security, documentation etc…
  - Alerts on form entry based on controller validation
- Code - how you format it for others to read / learn, how easy is it
for someone to grab your project and pick it up from there. 
  - 