## [Schema](index.md) / companies

Companies relate to the multi company feature of Simpro. Every data record has a company_id field, which is 0 when multi company isn't being used.

> Timezone is a really helpful field. It can be used to convert timestamps to the correct timezone for the company, also as part of timezone management in your Laravel application.

The API works with the same fields as the database, with companyID as a path parameter.

For more information on how accounting categories work in Simpro, check out the following:
* [Simpro Help Guide](https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm?tocpath=Products%7CSimpro%20Premium%7CAdd-Ons%7CMulti-Company%7C_____1)
* [Simpro API Reference](https://developer.simprogroup.com/apidoc/?page=edefbda3a2bdd979e42d8944b7325b79)

| Column Name                 | Data Type                | API Equivalent       | Notes                                                |
|-----------------------------|--------------------------|----------------------|------------------------------------------------------|
| company_id                  | integer                  | ID                   |                                                      |
| name                        | text                     | Name                 | The long form official name                          |
| abn                         | text                     | EIN                  | Vat Reg Number                                       |
| acn                         | text                     | CompanyNo            |                                                      |
| licence                     | text                     | Licence              | UTR No                                               |
| phone                       | text                     | Phone                |                                                      |
| fax                         | text                     | Fax                  |                                                      |
| email                       | text                     | Email                |                                                      |
| website                     | text                     | Website              |                                                      |
| address1ln1                 | text                     | Address.Line1        |                                                      |
| address1ln2                 | text                     | Address.Line2        |                                                      |
| address2ln1                 | text                     | BillingAddress.Line1 |                                                      |
| address2ln2                 | text                     | BillingAddress.Line2 |                                                      |
| bsb                         | text                     | Banking.RoutingNo    | Sort Code                                            |
| account                     | text                     |                      |                                                      |
| account_name                | text                     |                      |                                                      |
| bank                        | text                     |                      |                                                      |
| template                    | smallint                 |                      |                                                      |
| iban                        | text                     |                      |                                                      |
| branch_code                 | text                     |                      |                                                      |
| swift_code                  | text                     |                      |                                                      |
| cern                        | text                     |                      |                                                      |
| multi_company_label         | text                     |                      | This is what shows in the user interface as the name |
| multi_company_colour        | text                     |                      | Returns a hex color, eg. #4D13B9                     |
| pdf_bg_visibility           | text                     |                      |                                                      |
| timezone                    | text                     | Timezone             | IANA Time Zone Database Format eg. Europe/London     |
| currency                    | character                |                      |                                                      |
| language                    | text                     |                      |                                                      |
| employer_tax_ref_no         | text                     |                      |                                                      |
| country                     | text                     |                      |                                                      |
| stable_pdf_background       | bytea                    |                      |                                                      |
| testing_pdf_background      | bytea                    |                      |                                                      |
| stable_pdf_background_time  | integer                  |                      |                                                      |
| testing_pdf_background_time | integer                  |                      |                                                      |
| date_modified               | timestamp with time zone |                      |                                                      |
| iot_tenant_id               | text                     |                      |                                                      |
| lock_timesheet_date         | date                     |                      |                                                      |
| lock_timesheet              | boolean                  |                      |                                                      |