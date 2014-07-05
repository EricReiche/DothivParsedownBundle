# Parsedown Bundle

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/0c763771-b393-4017-8b88-72a27c3b2d2b/big.png)](https://insight.sensiolabs.com/projects/0c763771-b393-4017-8b88-72a27c3b2d2b)

dotHIV parsedown bundle for Symfony2 install Parsedown and provides a twig filter

## Install

```
    composer require dothiv/dothiv-parsedown-bundle dev-master
```

Add

```
    new Dothiv\Bundle\ParsedownBundle\DothivParsedownBundle(),
```

to your `AppKernel.php`.

## Usage

In twig templates:
```
    {{ var|markdown }}
```

In FOSCommentBundle:

```
fos_comment:
    service:
        markup: dothiv_parsedown.service.parsedown
```

Also see https://github.com/FriendsOfSymfony/FOSCommentBundle/blob/master/Resources/doc/9-using_a_markup_parser.md