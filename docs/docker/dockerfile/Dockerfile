FROM    houdunren/lamp

RUN     apt -y update
RUN     apt -y upgrade
RUN     apt install -f
RUN     mkdir /www
RUN     chmod 0777 /www
ADD    ./run.sh /run.sh
RUN     chmod 755 /*.sh
EXPOSE  80
EXPOSE  3306
CMD     ["/run.sh"]