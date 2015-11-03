<?php
/**
 * Sidebar containing the main widget area.
 */
?>








	<div class="sg-section">


		
		<div class="sg-title" id="buddypress-item-list">
			Item List Tabs  and Subnav
		</div>


		<div role="navigation" class="item-list-tabs"><ul><li id="groups-all" class=""><a href="http://wefoster.co/groups/">All Groups <span>45</span></a></li><li id="groups-personal" class="selected"><a href="http://wefoster.co/members/wefoster/groups/my-groups/">My Groups <span>16</span></a></li><li id="group-create-nav"><a class="group-create no-ajax" title="Create a Group" href="http://wefoster.co/groups/create/">Create a Group</a></li></ul></div><div role="navigation" id="subnav" class="item-list-tabs"><ul><li class="last filter" id="groups-order-select"><label for="groups-order-by">Order By:</label><select id="groups-order-by"><option value="active">Last Active</option><option value="popular">Most Members</option><option value="newest">Newly Created</option><option value="alphabetical">Alphabetical</option></select></li></ul></div>

		<div style="clear:both;"></div>	

	</div>

	<div class="sg-section">

		<div class="sg-title" id="buddypress-create-group-tab">
			Create Group Tabs
		</div>

		<div role="navigation" id="group-create-tabs" class="item-list-tabs no-ajax">
			<ul>
				<li class="current"><a href="http://wefoster.co/groups/create/step/group-details/">1. Details</a></li>
				<li><span>2. Settings</span></li>
				<li><span>3. Photo</span></li>
				<li><span>4. Invites</span></li>
					</ul>
				</div>

				<div style="clear:both;"></div>	

			</div>


	<div class="sg-section">
		<div class="sg-title" id="buddypress-member-loop">
			Member Loop
		</div>

		<?php 
			bp_get_template_part( 'members/members-loop' );
		?>

		<div style="clear:both;"></div>	
	</div>

	<div class="sg-section">

		<div class="sg-title" id="buddypress-groups-loop">
			Groups Loop
		</div>

		<?php 
			bp_get_template_part( 'groups/index' );
		?>
		<div style="clear:both;"></div>	
	</div>

	<div class="sg-section">

		<div class="sg-title" id="buddypress-message-inbox">
			Message Inbox
		</div>

	<div role="main" class="messages"><div id="user-pag" class="pagination no-ajax"><div id="messages-dir-count" class="pag-count">Viewing 1 - 2 of 2 messages</div><div id="messages-dir-pag" class="pagination-links"></div></div><form id="messages-bulk-management" method="post" action="http://wefoster.co/members/wefoster/messages/inbox/bulk-manage/"><table class="messages-notices table table-striped" id="message-threads"><thead><tr><th class="thread-checkbox" scope="col"><label for="select-all-messages" class="bp-screen-reader-text">Select all</label><input type="checkbox" id="select-all-messages"></th><th class="thread-from" scope="col">From</th><th class="thread-info" scope="col">Subject</th><th class="thread-options" scope="col">Actions</th></tr></thead><tbody><tr class=" unread" id="m-2"><td><input type="checkbox" value="2" class="message-check" name="message_ids[]"></td><td class="thread-from"><img width="25" height="25" alt="Profile picture of WeFoster" class="avatar user-1-avatar avatar-25 photo" src="http://gravatar.com/avatar/c921d87e4ee3cc3a00d71e649e44ddc7?d=mm&amp;s=25&amp;r=G"><span class="from">From:</span> <a title="WeFoster" href="http://wefoster.co/members/wefoster/">WeFoster</a><span class="thread-count">(1)</span> <span class="bp-screen-reader-text">1 unread</span><span class="activity">April 19, 2015 at 7:08 pm</span></td><td class="thread-info"><p><a title="View Message" href="http://wefoster.co/members/wefoster/messages/view/2/">Testing Messages</a></p><p class="thread-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed […]</p></td><td class="thread-options"><a href="http://wefoster.co/members/wefoster/messages/inbox/read/?action=read&amp;message_id=2&amp;_wpnonce=ba320ae427" class="read">Read</a> |<a href="http://wefoster.co/members/wefoster/messages/inbox/delete/2/?_wpnonce=c0031cf061" class="delete">Delete</a></td></tr><tr class="alt unread" id="m-1"><td><input type="checkbox" value="1" class="message-check" name="message_ids[]"></td><td class="thread-from"><img width="25" height="25" alt="Profile picture of WeFoster" class="avatar user-1-avatar avatar-25 photo" src="http://gravatar.com/avatar/c921d87e4ee3cc3a00d71e649e44ddc7?d=mm&amp;s=25&amp;r=G"><span class="from">From:</span> <a title="WeFoster" href="http://wefoster.co/members/wefoster/">WeFoster</a><span class="thread-count">(1)</span> <span class="bp-screen-reader-text">1 unread</span><span class="activity">April 19, 2015 at 7:08 pm</span></td><td class="thread-info"><p><a title="View Message" href="http://wefoster.co/members/wefoster/messages/view/1/">Testing Messages</a></p><p class="thread-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed […]</p></td><td class="thread-options"><a href="http://wefoster.co/members/wefoster/messages/inbox/read/?action=read&amp;message_id=1&amp;_wpnonce=effa43d9f4" class="read">Read</a> |<a href="http://wefoster.co/members/wefoster/messages/inbox/delete/1/?_wpnonce=c0031cf061" class="delete">Delete</a></td></tr></tbody></table><div class="messages-options-nav"><label for="messages-select" class="bp-screen-reader-text">Select Bulk Action</label><select id="messages-select" name="messages_bulk_action"><option selected="selected" value="">Bulk Actions</option><option value="read">Mark read</option><option value="unread">Mark unread</option><option value="delete">Delete</option></select><input type="submit" value="Apply" class="button action" id="messages-bulk-manage" disabled="disabled"></div><input type="hidden" value="5dccc67f3e" name="messages_bulk_nonce" id="messages_bulk_nonce"><input type="hidden" value="/members/wefoster/messages/" name="_wp_http_referer"></form></div>

		<div style="clear:both;"></div>	
	</div>

	<div class="sg-section">

		<div class="sg-title" id="buddypress-activity-loop">
			Activity Loop
		</div>

		<?php 
			bp_get_template_part( 'activity/activity-loop' );
		?>

		<div style="clear:both;"></div>	

</div>