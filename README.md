## [Frontend-Design: Collaborative flow](https://events.drupal.org/prague2022/sessions/frontend-design-collaborative-flow-workshop)

Workshop that was presented at DrupalCon Prague 2022.

Presentation of the collaborative flow between design and frontend in the development of an atomic design system for any project.

On the design side, the work methodology will be explained, in Figma, and a project will be presented in the form of a template that could correspond to the component system to be used in the frontend development.

The ease of replicating and adapting any project will be highlighted thanks to the definition of design tokens (foundations), patterns and components.

On the frontend side, the process of interpreting the Figma template design and how it becomes a real design system based on web-components and tailwind will be explained.

To highlight the collaborative process, it will be explained how the design is documented in Figma and the impact this has on the workflow between designers and developers, as well as the communication facilities involved.

[Here](https://github.com/monrodcar/frontend-design-collaborative-flow/blob/main/DrupalCon22_%20Frontend%20-%20Design%20_%20Collaborative%20flow%20(Workshop).pdf) you will have access to the slider of the presentation.

## Branches:

* workshop/first:
# Setup
1. To start the project run `ddev start && ddev composer install`
2. To import the demo database run `ddev import-db --src=./resources/db.sql.gz && ddev drush cr`
3. To launch the project run `ddev launch`
4. To login into the site run `ddev drush uli`

# Install
1. In ../web/themes/custom/DemoDesign/design-system `nvm use`
2. In ../web/themes/custom/DemoDesign/design-system `npm install`
3. In ../web/themes/custom/DemoDesign/ `npm install`

# Storybook
1. In ../web/themes/custom/DemoDesign/design-system `npm start`

# Compile the changes
1. In ../web/themes/custom/DemoDesign/design-system `npm run build`
2. In ../web/themes/custom/DemoDesign/ `npm run build`
