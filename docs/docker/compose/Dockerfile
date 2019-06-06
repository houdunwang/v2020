FROM    ubuntu

RUN     apt -y update
RUN     apt -y upgrade
RUN     apt install -f
RUN     apt -yq install nginx
RUN     mkdir /www
RUN     chmod 0777 /www
ADD    ./run.sh /run.sh
RUN     chmod 755 /*.sh
EXPOSE  80
CMD     ["/run.sh"]