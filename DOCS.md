{{ noparse }}
### `{{ geofo }}`
`{{ geofo }}` strips HTML tags from content within its tag pair.
      
    {{ geofo }}{{ content }}{{ /geofo }}

#### Optional Setting
##### preserve
    preserve=""

If you want to preserve specific tags, use the preserve parameter. Input the tags as shown below, wrapped in `<` and `>` with no whitespace or delimiters.
  
    {{ geofo preserve="<p><a>" }}
{{ /noparse }}
