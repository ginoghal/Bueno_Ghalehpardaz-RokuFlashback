Roku Flashback App
by Guillerme Da-Silva and Gino Ghalehpardaz
MMED 5006

Roku Flashback app contains movies, music and tv show trailers, songs and/or commercials from some of the biggest and most relevant people in the world. There is content from the 50s, 60s, 70s, 80s and 90s.

Our Roku Flashback contains an Adult section that has access to all the content and a filtered out kids version.


Design:
The design is for the adults is dark but inviting and is meant to be simple, but clean and professional.
We kept all the menu options at the top of the page so that you can view categories if you wanted to change your video without scrolling from it.
Both versions are also different colored and the kids buttons are bigger and bolder to provide an easier and more enjoyable experience.
The kids version color is lighter to be more inviting and easier on the eyes.
Video controls are that of youtube because it is one of the most widely recognizable video controls and by being so recognizable makes it easy to use.

Instructions: 

To Login:
Username: gui
password: 123

******************************************************************************************************************************


#### PHP Movie Review
This is the Docker environment set up for Movie Review


#### Prerequisites
1. Install `Docker` from [https://docs.docker.com/install/] 
2. IF you are in Linux, install `docker-compose` from [https://docs.docker.com/install/]


#### Set up
1. Clone the repo
   ```
   git clone https://github.com/spiderPan/Fanshawe-IDP-Inclass.git
   ```
2. Open the folder and run docker-compose
   ```
   cd movies_cms
   docker-compose up
   ```
3. When you're finished, you can turn if off by doing 
   ```
   docker-compose down
   ```

### Alternative Set up
For an alternative other than using docker, you may clone the repo and place it inside the MAMP/htdocs(Mac) or wamp64/www(windows) folder. 
Start WAMP/MAMP and acces it through `http://localhost/Bueno_Ghalehpardaz-RokuFlashback`

#### URLs
1. The project is up in `http://localhost:8010` which is mapping to the `Bueno_Ghalehpardaz-RokuFlashback` folder
2. phpMyAdmin is in `http://localhost:8011` with the credential of 
```
Username: docker_u
Password: docker_p
```
