# Use an official PHP with Apache base image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Install Git to clone the repository
RUN apt-get update && \
    apt-get install -y git

# Clone the GitHub repository into the container (if needed)
# RUN git clone https://github.com/1BM22CS405/DevOps.git .

# Copy the entire contents of your local project into the container
COPY . .

# Expose port 80 for the Apache web server
EXPOSE 80

# Define the command to start the Apache web server
CMD ["apache2-foreground"]
