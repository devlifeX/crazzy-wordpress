FROM keymetrics/pm2:latest-stretch

# Bundle APP files
COPY ./node_app src/
COPY ./node_app/package.json .
COPY ./node_app/pm2.json .

# Install app dependencies
ENV NPM_CONFIG_LOGLEVEL warn
RUN npm install --production

RUN ls -al

# Show current folder structure in logs
EXPOSE 3000
CMD [ "pm2-runtime", "start", "pm2.json" ]
