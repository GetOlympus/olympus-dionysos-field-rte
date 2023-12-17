# Dionysos Rte Field
> This component is a part of the **Olympus Dionysos fields** for **WordPress**.  
> It uses the default WordPress RTE field.

```sh
composer require getolympus/olympus-dionysos-field-rte
```

---

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![MIT][license-image]][license-blob]

---

<p align="center">
    <img src="https://github.com/GetOlympus/olympus-dionysos-field-rte/blob/master/assets/field-rte-64.png" />
</p>

---

## Field initialization

Use the following lines to add a `rte field` in your **WordPress** admin pages or custom post type meta fields:

```php
return \GetOlympus\Dionysos\Field\Rte::build('my_rte_field_id', [
    'title'       => 'How do Penguins drink their cola?',
    'default'     => 'On the rocks.',
    'description' => 'A simple question to know if you will be able to survive to the Penguin domination.',
    'placeholder' => 'Tell us how?',

    /**
     * RTE settings
     * @see https://codex.wordpress.org/Function_Reference/wp_editor
     */
    'settings' => [
        'teeny'         => false,
        'textarea_rows' => 8,
    ]
]);
```

## Variables definitions

| Variable      | Type    | Default value | Accepted value | Description |
| :------------ | :------ | :------------ | :------------- | :---------- |
| `title`       | String  | `'Rte'` | *empty* | |
| `default`     | String  | *empty* | *empty* | Sets default value if none found |
| `description` | String  | *empty* | *empty* | |
| `placeholder` | String  | *empty* | *empty* | For `default` mode only |
| `settings`    | Array   | see [Field initialization](#field-initialization) | see [WordPress reference](https://codex.wordpress.org/Function_Reference/wp_editor) | For `rte` mode only |

## Retrive data

Retrieve your value from Database with a simple `get_option('my_rte_field_id', '')` (see [WordPress reference][getoption-url]):

```php
// Get RTE from Database
$rte = get_option('my_rte_field_id', '');

// Display RTE in HTML tag
echo '<pre>'.htmlspecialchars($rte).'</pre>';
```

## Release History

0.0.1
- Initial commit

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-rte/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-rte/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-rte
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-rte/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-rte.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-rte