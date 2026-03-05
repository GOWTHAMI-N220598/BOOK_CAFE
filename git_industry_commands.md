
### command:
git config --list
### purpose
Displays all Git configuration settings
(username,email,core settings,etc).
### Example:
git config --list
### syntax
git config --list
### screenshot proof
![Git Config Output](config--list.png)


## command:git config --global user.name
### syntax:
git config --global user.name "Your Name"
### purpose:
Sets or displays the global username used for Git commits.
### Example:
git config --global user.name
### screenshot Proof:
![Git Username]
(global_user.name.png)

## command:git config --global user.email
### syntax:
git config --global user.name "your-email@example.com"
### purpose:
Sets or displays the global email used for Git commits.
### Example:
git config --global user.email
### screenshot Proof:
![Git Email](global_user.email.png)


## Command: git config --unset
### Syntax:
git config --global --unset user.name
### Purpose:
Removes a specific Git configuration setting.
### Example:
git config --global --unset user.name
### Screenshot Proof:
![Git Unset Output](global_unset.png)

## Command: git init
### Syntax:
git init
### Purpose:
Initializes a new Git repository in the current folder. Creates a .git folder to track changes.
### Example:
git init
### Screenshot Proof:

![Git Init Output](git_init.png)


## Command: git clone
### Syntax:
git clone <repository-url>
### Purpose:
Copies a remote repository from GitHub (or another server) to your local computer.  
Creates a folder with all files and full commit history.
### Example:
git clone https://github.com/your-username/bookcafe.git
### Screenshot Proof:
![Git Clone Output](git_clone.png)


## Command: git clone --branch
### Syntax:
git clone --branch <branch-name> <repository-url>
### Purpose:
Clones a specific branch from a remote repository instead of the default branch.
### Example:
git clone --branch git-lab-practice https://github.com/GOWTHAMI-N220598/BOOK_CAFE.git
### Screenshot Proof:
![Git Clone Branch Output](git_branch_clone.png)


## Command: git clone --depth
### Syntax:
git clone --depth <number-of-commits> <repository-url>
### Purpose:
Clones only the most recent commits instead of the full history, making cloning faster.
### Example:
git clone --depth 1 https://github.com/GOWTHAMI-N220598/BOOK_CAFE.git
### Screenshot Proof:
![Git Clone Depth Output](git_clone_depth.png)

## Command: git status
### Syntax:
git status
### Purpose:
Shows the current branch and the status of files (tracked/untracked, staged/unstaged).
### Example:
git status
### Screenshot Proof:
![Git Status Output](git_status.png)

## Command: git log
### Syntax:
git log
### Purpose:
Shows the commit history of the current branch, including commit hash, author, date, and message.
### Example:
git log
### Screenshot Proof:
![Git Log Output](git_log.png)

## Command: git log --oneline
### Syntax:
git log --oneline
### Purpose:
Shows a brief version of the commit history with each commit in a single line.
### Example:
git log --oneline
### Screenshot Proof:
![Git Log Oneline Output](git_log_oneline.png)


## Command: git log --graph
### Syntax:
git log --graph
### Purpose:
Shows the commit history as a graph to visualize branching and merges.
### Example:
git log --graph
### Screenshot Proof:
![Git Log Graph Output](git_log_graph.png)

## Command: git show
### Syntax:
git show
### Purpose:
Displays detailed information about the most recent commit, including changes made.
### Example:
git show
### Screenshot Proof:
![Git Show Output](git_show.png)

this is a test line for git diff

## Command: git diff
### Syntax:
git diff
### Purpose:
Shows the differences between the working directory and the staging area (unstaged changes).
### Example:
git diff
### Screenshot Proof:
![Git Diff Output](git_diff.png)

this is a test line for git staged## Command: git diff --staged

### Syntax:
git diff --staged

### Purpose:
Shows the differences that have been staged for the next commit.

### Example:
git diff --staged

### Screenshot Proof:
![Git Diff Staged Output](git_diff_staged.png)

## Command: git blame

### Syntax:
git blame <file-name>

### Purpose:
Shows the commit, author, and date for each line in a file to track who last modified it.

### Example:
git blame git_industry_commands.md

### Screenshot Proof:
![Git Blame Output](git_blame.png)

## Command: git reflog

### Syntax:
git reflog

### Purpose:
Shows a log of all your Git actions (commits, resets, checkouts) for the current branch.

### Example:
git reflog

### Screenshot Proof:
![Git Reflog Output](git_reflog.png)

## Command: git shortlog

### Syntax:
git shortlog

### Purpose:
Shows a summary of commits grouped by author with the number of commits and messages.

### Example:
git shortlog

### Screenshot Proof:
![Git Shortlog Output](git_shortlog.png)

temporary line for git add command

## Command: git add
### Syntax:
git add <file-name>
### Purpose:
Stages changes in the working directory for the next commit.
### Example:
git add git_industry_commands.md
### Screenshot Proof:
![Git Add Output](git_add.png)

## Command: git add .

### Syntax:
git add .

### Purpose:
Adds all new and modified files in the current repository to the staging area so they can be committed.

### Example:
git add .

### Screenshot Proof:
![Git Add Dot Output](git_add_dot.png)

temp for git add -p

## Command: git add -p

### Syntax:
git add -p

### Purpose:
Allows the user to interactively stage specific changes (patches) from modified files instead of staging all changes at once.

### Example:
git add -p

### Screenshot Proof:
![Git Add Patch Output](git_add_patch.png)