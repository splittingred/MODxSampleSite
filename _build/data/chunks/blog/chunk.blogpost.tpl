<div class="ditto_summaryPost">
  <h3><a href="[[~[[+id]]]]" title="[[+pagetitle]]">[[+pagetitle]]</a></h3>
  
  <div class="ditto_info">
    By <strong>[[+createdby:userinfo=`fullname`]]</strong> on [[+publishedon:strtotime:date=`%b %d, %Y`]].
    <!--
    <a href="[[~[[+id]]]]#commentsAnchor">Comments
    ([!Jot? &docid=`[[+id]]` &action=`count-comments`!])</a> -->
  </div>
  [[+tv.tags:notempty=`<div class="ditto_tags">Tags: [[tolinks? &items=`[[+tv.tags]]` &key=`tag`]]</div>`]]
  
  [[+introtext:empty=`[[+content:ellipsis=`200`]]`]]
  <p class="ditto_link">[[+link]]</p>
</div>