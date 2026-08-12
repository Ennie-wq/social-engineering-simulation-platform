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
