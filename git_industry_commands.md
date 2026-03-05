
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