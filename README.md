# Geo' Fo'

Geo' Fo' is a Statamic plugin that strips HTML tags while preserving those you designate.

## The Tag
Wrap the content to be parsed in `{{ geofo }}` tags.

    {{ geofo }}{{ content }} {{ /geofo }}

## Preserve Tags

If you want to preserve specific tags, use the preserve parameter. Input the tags as shown below, wrapped in `<` and `>` with no whitespace or delimiters.
      
    {{ geofo preserve="<p><a>" }}