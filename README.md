# Installation and first start

Get project from https://github.com/fica990/school_boards.git

`git clone https://github.com/fica990/school_boards.git`

Edit /etc/hosts file and add **my-app.com** for **127.0.0.1**

Navigate to **school_boards/docker**

`cd school_boards/docker`

Create **.env** based on **.env.example** 

Starting docker for first time:

`sh setup.sh`

---

SSH to docker: (optional)

* `docker ps` (find your docker container name -> last column NAMES)
* `sudo docker exec -it <container_name> /bin/bash` where <container_name> should be replaced with actual name

Navigate to **/var/www/my-app**

`cd ../my-app`

---

Home page is **my-app.com/products**

Admin panel is **my-app.com/products**



