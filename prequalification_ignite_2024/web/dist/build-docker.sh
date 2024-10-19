docker build -t my_blog .
docker run --name=my_blog --rm -p1337:80 -it my_blog
