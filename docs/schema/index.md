# The good, the bad and the ugly of the Simpro Postgres database schema

If you take a look at the schema for the Simpro Postgres database, you'll see that it's a bit of a mess. The tables are named in a way that doesn't make much sense, and the relationships between them are not always clear.

So if you are familiar with Simpro or it's API, you may struggle finding what you're looking for. There are 742 tables in the database, and the naming conventions do not match up with the front end or the API.

**Looking for jobs?** *That's the quote table*.

**Looking for quotes?** *That's the quote_quote table*.

**Want cost centres?** *That's the departments table*.

The aim of these docs is to provide guidance on each table and the relationships between them, to make it easier to work with the data in the Simpro Postgres database, and translate schema names to more relatable UI / API names.

Okay so that's the bad and the ugly, but there is good - plenty of it.

In addition to getting the performance benefits of querying a database directly, you can also get access to data that is not available via the API. This includes things like scripts, audits and pretty much anything. If you can see if through the front end then you can access it via the database.