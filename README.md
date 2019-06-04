# video_platform
Website to present, upload and watch videos

Some general infos:
I created this website as a hobby project and especially to get better at CSS,PHP and JavaScript.
Also this is my first Website in which I used a MySQL DB so there was a lot for me to learn on this topic as well.
Additionally I learned a lot about responsive design and mobile optimization.

I did not give a lot of attention to performance or optimization at all. So I guess there are some double SQL queries which are not 
necessary or in general code which could be optimized, so keep in mind that I mainly wanted to learn and have fun at coding.

This website could be used by a single or multiple creators of videos on youtube to display their content on an own Site.
Also if there are videos which can't be uploaded to youtube, the source of the videos could also be a network storage or another
video platform.
Currently I'm working on a seperate space from which videos can be "uploaded" or better said from which you can easily create DB entries.

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Some infos about the files:

db_dump.sql -> Example DB I used while creating the website

/img -> Repository for all images used
        -Logo,Banner,socialmedia images
        -svg -> Used for Navigation
        -Thumbnail, Cover and Creator for each video (names of images in db)
          (Path to pictures found in templates/img_paths.php)
          
style.css -> contains complete CSS code

index.php -> combines header, content and footer

content.php -> contains the sidebar and collectes all the content
        
/templates -> contains all files used to display content on the home-page
              post_function -> functions used by many files
              load_more.php -> function used to load 15 more videos (does not work nice if there are not 15 DB entries anymore)
              
/templates/sidebar -> containes sidebar for each site

/templates/folge_detail -> containes all files to display content on the details page of each video/episode
                           (There are some files which can be used if the source of the video is not youtube but a local/network storage)
                           


