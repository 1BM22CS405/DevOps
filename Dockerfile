# Stage 1: Clone the GitHub repository into a temporary image
FROM ubuntu AS clone

# Install Git to clone the repository
RUN apt-get update && \
    apt-get install -y git

# Clone the GitHub repository into the container
WORKDIR /app
RUN git clone https://github.com/1BM22CS405/DevOps.git .

# Stage 2: Create the final image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the contents of the temporary image into the final image
COPY --from=clone /app .

# Expose port 80 for the Apache web server
EXPOSE 80

# Define the command to start the Apache web server
CMD ["apache2-foreground"]
