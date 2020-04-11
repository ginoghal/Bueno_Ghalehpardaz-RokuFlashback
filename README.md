Roku Flashback App
by Guillerme Da-Silva and Gino Ghalehpardaz
MMED 5006

Roku Flashback app contains movies, music and tv show trailers, songs and/or commercials from some of the biggest and most relevant people in the world. There is content from the 50, 60, 70, 80 and 90s.

Our Roku Flashback contains an Adult section that has access to all the content and a filtered out kids version.


Design:
The design is for the adults is dark but inviting and is meant to be simple, but clean and professional.
Both versions are also different colored and the kids buttons are bigger and bolder to provide an easier and more enjoyable experience.


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
3. When you finished work, you can turn if off by doing 
   ```
   docker-compose down
   ```

#### URLs
1. Your project is up in `http://localhost:8010` which is mapping to the `movies_cms` folder
2. The phpMyAdmin is in `http://localhost:8011` with the credential of 
```
Username: docker_u
Password: docker_p
```
