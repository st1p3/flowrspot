//For Developers

Starting a new WP project:

1. Navigate to your local PhpMyAdmin and create a new Database (eg. flowrspot)
2. Copy the files inside htdocs (XAMPP/LAMP/WAMP local  server)
3. Go to wp-config file and change the second param of the following commands to match your DB name, your local DB user, and user password:

    /** The name of the database for WordPress */
         define('DB_NAME', 'flowrspot');

     /** Database username */
        define('DB_USER', 'root');

    /** Database password */
        define('DB_PASSWORD', '');

4. Open your browser and navigate to your previously created folder in your htdocs (eg "localhost/flowrspot")
    WordPress will prompt you to with the installation. Enter your admin username and password, and give your website a name.
    You will be redirected to wp admin, where you can login with your creditentials created one step before.

5. Navigate to Appearance->Themes and activate "Flowerspot Child" theme

6. Navigate to "Plugins" menu to activate Advanced Custom fields and Flower Spotting Plugin

7. Navigate to "ACF" menu and then click "Tools" to Import ACF JSON file attached in the root of this project (you may delete it after import)
    This will add premade custom fields in Flowers menu that was created by activating Flower Spotting Plugin



Adding content to the website:

1. Navigate to Flowers->Flower Genuses to add genus(category) for your flower(post), enter genus name and click Add
2. Navigate to Flowers->Add New to add a new flower
    1. Enter flower name
    2. In gutenberg wysiwyg editor you are able to add a gallery of images of your flower (it is limited just for the gallery block)
    3. Previously imported custom fields (location, short description and oembed) are located under gutenberg, which you may want to fill with the data
    4. On the right sidebar, you are able to select your previously created Flower Genuses and select featured image of the flower
    5. Click publish


Using the shortcodes:

1. After creating you first flower (in the list of flowers in admin panel) you should be able to see a custom metabox that displays a shortcode for that specific flower
    EXAMPLE:
        [flower post_id="13"]

    This shortcode is used in the following file: flowrspot-child/template-parts/single-item/content-single-item.php on line 69, just for the demo purposes, so make sure to 
    change it with your flower id (to try it out)

2. After creating your first flower genus (in the list of flower genuses) you should be able to see a slug for your genus that is used by the shortcode to display a list of flowers with that genus
    EXAMPLE:
        [flower_genus_posts category="platicodon-grandiflorus"]

    This shortcode is used in the following file: flowrspot-child/index.php on line 5, just for the demo purposes, so make sure to 
    change it with your category name (to try it out)


To access API navigate to the follwing url
    http://localhost/flowrspot/wp-json/wp/v2/flowers

    *replace flowerspot with your own folder name of the project inside htdocs