## [Schema](index.md) / account_categories

This one is pretty straight forward. It holds the categories for the accounting system. The Simpro user interface allows users to interact with the accounting category name and reference.

The API works with the same fields as the database, with companyID as a path parameter.

For more information on how accounting categories work in Simpro, check out the following:
* [Simpro Help Guide](https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Accounting-Categories.htm?Highlight=accounting%20categories)
* [Simpro API Reference](https://developer.simprogroup.com/apidoc/?page=9b945efebb006547a94415eadaa12921#tag/Accounting-Categories)

| Column Name   | Data Type | Description                            |
|---------------|-----------|----------------------------------------|
| category_id   | integer   | The unique identifier for the category |
| category_name | text      | The name of the category               |
| reference     | text      | The reference for the category         |
| removed       | boolean   | Whether the category has been removed  |
| company_id    | integer   | The unique identifier for the company  |

