
FROM node:18-alpine
RUN mkdir -p /node/app/node_modules && chown -R node:node /node/app
WORKDIR /node/app
COPY package*.json ./
RUN npm install
COPY --chown=node:node . .
RUN npm install -g nodemon
EXPOSE 3001
CMD ["node", "start"]
