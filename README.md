# AtoM B5 theme plugin skeleton

Initial skeleton for an AtoM theme plugin, extending arDominionB5Plugin without
modifications.

Requires an AtoM version including such theme (currently under developmemt in
https://github.com/artefactual/atom/tree/dev-test/issue-13530-b5-themes).

- Clone this respository inside AtoM's plugins folder (from the main folder).

  ```
  git clone --depth=1 git@gitlab.artefactual.com:software-development/arB5ThemePlugin.git plugins/arB5ThemePlugin
  rm -rf plugins/arB5ThemePlugin/.git
  ```

- Modify the plugin:

  - Rename the plugin folder.
  - Rename the [config class filename](config/arB5ThemePluginConfiguration.class.php).
  - Rename the [config class name](config/arB5ThemePluginConfiguration.class.php#L23).
  - Modify the [theme summary and version](config/arB5ThemePluginConfiguration.class.php#L25-26).
  - Update the [theme image](images/image.png) (shown in the themes page).

- Extend/customize the plugin:

  - Check the [main SCSS file](scss/main.scss) for styles.
  - Check the [main JS file](js/main.js) for scripts.
  - Overwrite main templates in the templates folder.
  - Overwrite actions and templates from other modules in a modules folder.

- Build the theme assets:

  ```
  docker-compose exec atom npm install
  docker-compose exec atom npm run build
  ```

- Watch for changes during development:

  ```
  docker-compose exec atom npm run watch
  ```

- Linting (add the plugin to the `.prettierignore` file in AtoM's main folder):

  ```
  docker-compose exec atom npm run check-format
  docker-compose exec atom npm run format
  ```
