[[!getPage?
  &element=`getArchives`
  &elementClass=`modSnippet`
  &tpl=`blogPost`
  &hideContainers=`1`
  &showHidden=`1`
  &pageVarKey=`page`
  &parents=`2`
  &includeTVs=`1`
  &toPlaceholder=`archives`
  &limit=`10`
]]

<h3>[[+arc_month_name]] [[+arc_year]] Archives</h3>

[[+archives]]

[[!+page.nav:notempty=`
<div class="paging">
<ul class="pageList">
  [[!+page.nav]]
</ul>
</div>
`]]
