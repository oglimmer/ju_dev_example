FROM node

COPY . /opt/app

WORKDIR /opt/app

RUN npm i

ENTRYPOINT ["./entrypoint.sh"]
CMD ["node", "index.js"]