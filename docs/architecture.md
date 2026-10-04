# WordPress Theme Stack Architecture

- **Theme Engine**: Clean PHP 8.2+ template hierarchy with separation of concerns.
- **REST API Diagnostics**: Dedicated `/wp-json/enterprise/v1/health` endpoint for uptime monitoring and synthetics.
- **Security Hardening**: Header injection, XML-RPC termination, generator signature redaction.
