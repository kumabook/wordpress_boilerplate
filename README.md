# WordPress boilerplate

Wordpress site boilerplate:

- Develop custom app theme
- Run wordpress locally on docker
- Deploy on AWS with Elastic Beanstalk

## Development

### Install tools

- Install docker, docker-machine and docker-compose
- Install `wp-cli`
  - `brew install wp-cli`


### Running locally in Docker

1. Create .env. See .env.dist
2. docker-compose up

## Deployment

### Install tools

- Install eb cli: `brew install awsebcli`

### Deploy on AWS

We use RDS and Elastic Beanstalk

#### Create DB instance of RDS

You must run RDS DB instance on (default) VPC and create security group.
Refer [php-hawordpress-tutorial](https://docs.aws.amazon.com/ja_jp/elasticbeanstalk/latest/dg/php-hawordpress-tutorial.html)

#### Deploy wordpress with Elastic Beanstalk

1. Create .envrc. See .envrc.dist
2. Run setup.sh: `./setup.sh`
3. Run deploy.sh: `./deploy.sh`
