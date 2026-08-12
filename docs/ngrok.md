# ngrok Integration

## Overview

ngrok was used as the external connectivity layer for the security
simulation platform.

The application was first hosted locally using PHP and then exposed
through an ngrok HTTPS tunnel for authorized testing.

## Local PHP Server

The application can be started locally with:

```bash
php -S 0.0.0.0:8080

The application can then be accessed locally through:

http://127.0.0.1:8080
Starting ngrok

After confirming that the local PHP server is running:

ngrok http 8080

ngrok creates an HTTPS forwarding address that connects the external
request to the local PHP application.

Configuration-Based Deployment

The project also tested ngrok's configuration-based deployment.

First validate the configuration:

ngrok config check

Configured endpoints can then be started with:

ngrok start --all
Troubleshooting

During development, several issues were encountered with the ngrok
configuration and endpoint startup.

The troubleshooting process included:

Checking the installed ngrok version.
ngrok version
Validating the configuration.
ngrok config check
Testing a single endpoint independently.
ngrok http 8080
Confirming that PHP was actually listening on the expected port.
ss -tlnp | grep 8080
Testing configuration-based startup.
ngrok start --all
