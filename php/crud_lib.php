<?php
function get_all_tags() {
	// returns all tags
}

function get_tag() {
	// returns a tag
}

function update_tag() {
	$result = mysqli_query($link, "UPDATE tag SET label=''".$tag["label"]."' WHERE id = '".$tag["id"]."';", MYSQLI_USE_RESULT);
	if($result) {
		echo "`review_tag.name = time logs` Entry Created. \n";
		return true;
	}

		return false;
}

function create_tag() {
	// creates a tag
	// returns boolean for successfull creation
}

function delete_tag() {
	// deletes a tag
	// returns boolean for successfull creation
}

function get_items() {
	// returns a item
}

function update_item($item) {
	$result = mysqli_query($link, "UPDATE item SET item=''".$item["item"]."' WHERE id = '".$item["id"]."';", MYSQLI_USE_RESULT);
	if($result) {
		echo "`review_item.name = time logs` Entry Created. \n";
		return true;
	}

		return false;
}

function create_item($item) {
	$result = mysqli_query($link, "INSERT INTO item (updated, item) VALUES (NOW(),'".$item."');", MYSQLI_USE_RESULT);
	if($result) {
		echo "`review_item.name = time logs` Entry Created. \n";
		return true;
	}

		return false;
}

function delete_item() {
	// deletes a item
	// returns boolean for successfull creation
}

function get_priorities() {
	// returns a priority
}

function update_priority() {
	// updates a priority's label w/ opt to add prioritys to priority
	// returns boolean for successfull update
}

function create_priority() {
	// creates a priority
	// returns boolean for successfull creation
}

function delete_priority() {
	// deletes a priority
	// returns boolean for successfull creation
}

function get_all_backlog_items() {
	// returns a backlog_item
}

function update_backlog_item() {
	// updates a backlog_item w/ opt to update item,status, and tag
	// if no options are give return false
	// returns boolean for successfull update
}

function create_backlog_item() {
	// creates a backlog_item
	// returns boolean for successfull creation
}

function delete_backlog_item() {
	// deletes a backlog_item
	// returns boolean for successfull creation
}

function get_reviews() {
	// returns a review
}

function update_review() {
	// updates a review's label w/ opt to add reviews to review
	// returns boolean for successfull update
}

function create_review() {
	// creates a review
	// returns boolean for successfull creation
}

function delete_review() {
	// deletes a review
	// returns boolean for successfull creation
}

function get_goal_reviews() {
	// returns a goal_review
}

function update_goal_review() {
	// updates a goal_review's label w/ opt to add goal_reviews to goal_review
	// returns boolean for successfull update
}

function create_goal_review() {
	// creates a goal_review
	// returns boolean for successfull creation
}

function delete_goal_review() {
	// deletes a goal_review
	// returns boolean for successfull creation
}

function get_goals() {
	// returns a goal
}

function get_goal() {
	// returns a goal
}

function update_goal() {
	// updates a goal's label w/ opt to add goals to goal
	// returns boolean for successfull update
}

function get_item_statuses() {
	// returns a item_status
}

function get_item_status() {
	// returns a item_status
}

function get_goal_status() {
	// returns a goal_status
}

function get_goal_status() {
	// returns a goal_status
}

function get_all_review_items() {
	// returns a review_item
}

function get_review_item() {
	// returns a review_item
}

function get_all_wip_timelimits() {
	// returns a wip_timelimit
}

function get_wip_timelimit() {
	// returns a wip_timelimit
}

function get_backlog_by_tag() {
// returns all backlog items by tag
}

function get_inbox() {
	// returns all items w/o tags in order of oldest item first.
}

function get_weekly_review() {
	// returns all goals, review_items, and the latest reviews and goal reviews.
}
