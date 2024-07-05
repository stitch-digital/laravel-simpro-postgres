# Getting Started
This guide will explain more about the Postgres connection, when it's helpful to use it over API and what you can expect from the schema.

### Why use the Postgres connection?

Simpro has a very good and well documented API, which is suitable for most use cases. However, if you are consuming a lot of data from Simpro, the API can be slow and is rate limited to 10 API requests per second from a single Simpro client build URL endpoint.

While there are ways to handle large volumes of data using the API more effectively, such as using Post and Patch Multiple, Subresources and Pagination, the nature of the schema means often making multiple requests is necessary to get the data you need. Heavy use of the API can cause the entire Simpro application to slow down, as it is a shared resource.

The final important difference is that the API provides limited data, whereas the Postgres connection provides access to the entire database schema. This can be useful for more complex queries and data analysis, as well as providing access to data that would be otherwise unavailable.

### The GET method replacement
The direct connection to a read-only Postgres database is a great way to get data out of Simpro quickly and efficiently. However, it is important to note that this package is not a direct replacement for the Simpro API. It is however a really effective way to get data out of Simpro quickly and efficiently, replacing the GET methods of the API.

### Accessing a Simpro Postgres connection
To access a Simpro Postgres connection, you will need to speak to your Simpro representative to provide access.

> [!IMPORTANT]
> You will need to ensure that your Simpro build is on a private cloud infrastructure, as the Postgres database is not available on the shared cloud infrastructure. This will incur additional cost.

You should expect to receive the following:
- Username (often client_readonly)
- Password
- Host
- Port

### Whitelisting IPs
Simpro requires whitelisted domain access to their connections. Please ensure that you have whitelisted your local fixed VPN IP address and also your production server.

