# 🧭 Advanced Git Command Reference Guide

## 📌 Initial Setup & Configuration

```bash
git init                   # Initialize a new Git repository

git config --global user.name "Your Name"            # Set global username
git config --global user.email "you@example.com"    # Set global email
git config --global init.defaultBranch main          # Set default branch name

git config --global core.editor nano                 # Set default editor (nano, vim, code)
git config --global merge.tool vimdiff               # Set merge tool
git config --global color.ui auto                    # Enable color in output

git config --global alias.co checkout                # Shortcut: git co = git checkout
git config --global alias.br branch                  # Shortcut: git br = git branch
git config --global alias.ci commit                  # Shortcut: git ci = git commit
git config --global alias.st status                  # Shortcut: git st = git status

git config --list                                    # List all Git configs
```

---

## 📂 Gitignore & Gitkeep

- **.gitignore**: Prevent tracking of specific files/directories.

```bash
echo "node_modules/" >> .gitignore
echo ".env" >> .gitignore
echo "*.log" >> .gitignore
echo "*.tmp" >> .gitignore
echo ".DS_Store" >> .gitignore

git add .gitignore
git commit -m "Add .gitignore"
```

- **.gitkeep**: Placeholder to track empty directories.
```bash
touch path/to/emptydir/.gitkeep
git add path/to/emptydir/.gitkeep
git commit -m "Track empty dir with .gitkeep"
```

---

## 🚀 Basic Workflow

```bash
git status                      # Check current status
git add <file|.>                # Stage file(s) for commit
git reset HEAD <file>           # Unstage a file
git commit -m "Message"         # Commit staged changes
git commit -am "Quick commit"   # Add & commit modified files (skips new)
```

---

## 📜 Viewing History and Differences

```bash
git log                         # Full commit history
git log --oneline --graph       # Visual branch log
git log --author="Name"         # Filter commits by author
git log -p -2                   # Show diff for last 2 commits

# Diffs
git diff                        # Show unstaged changes
git diff --cached               # Show staged changes
git diff HEAD                   # Compare working dir with last commit
git diff HEAD~1 HEAD            # Compare two commits
git diff <commit1> <commit2> -- <file>
```

---

## 🌱 Branching and Merging

```bash
git branch                      # List branches
git branch -a                   # All branches (local & remote)
git branch new-feature          # Create new branch

git checkout new-feature        # Switch to branch
git switch new-feature          # Alternative to checkout

git checkout -b new-feature     # Create & switch

git merge new-feature           # Merge into current branch
git merge --no-ff new-feature   # Force a merge commit

git branch -d new-feature       # Delete branch (safe)
git branch -D new-feature       # Force delete
```

---

## 🧽 Cleaning Up

```bash
git clean -n                    # Show what would be deleted
git clean -f                    # Remove untracked files
git clean -fd                   # Remove untracked files and dirs
```

---

## 🔄 Undoing Changes

```bash
git checkout -- <file>          # Discard changes in working directory
git restore <file>             # Safer version of above

git reset --soft HEAD~1        # Undo commit (keep changes staged)
git reset --mixed HEAD~1       # Undo commit (unstage changes)
git reset --hard HEAD~1        # Undo commit (discard changes)

# Reverting and Re-reverting
git revert <commit>            # Create a commit that undoes a previous one
git revert <revert_commit>     # Revert the revert
```

---

## 🌐 Remote Repositories

```bash
git remote -v                                     # View remotes
git remote add origin <url>                      # Add a remote
git remote rename origin upstream                # Rename remote

git remote set-url origin <new-url>              # Change remote URL
git remote remove origin                         # Remove remote

# Push and pull
git push -u origin main                          # Push branch and set upstream
git push --force-with-lease                      # Safe force push
git pull origin main                             # Pull and merge
```

---

## 🔁 Cloning and Fetching

```bash
git clone <url>                                   # Clone a repository
git clone --depth=1 <url>                         # Shallow clone

git fetch origin                                  # Download changes

git fetch --all                                   # Fetch all remotes

git pull --rebase                                 # Rebase instead of merge
```

---

## 💾 Stashing Work

```bash
git stash                                         # Save current changes
git stash save "WIP: feature-A"                   # Save with message
git stash list                                    # Show all stashes
git stash show -p stash@{0}                       # Show stash diff
git stash apply stash@{1}                         # Apply specific stash
git stash pop                                     # Apply latest and remove

git stash drop stash@{0}                          # Remove stash manually
git stash clear                                   # Remove all stashes
```

---

## 🔖 Tagging Releases

```bash
git tag v1.0                                      # Lightweight tag
git tag -a v1.0 -m "Release 1.0"                  # Annotated tag

git show v1.0                                     # Tag details
git push origin v1.0                              # Push tag
git push origin --tags                            # Push all tags
```

---

## ☁️ Git Hosting Platforms (GitHub, GitLab, GitKraken)

### Connect Local Repo to GitHub/GitKraken

1. Create repo on the platform.
    
2. Connect remote and push:
    

```bash
git remote add origin https://github.com/username/repo.git
git branch -M main
git push -u origin main
```

### SSH Authentication

```bash
ssh-keygen -t rsa -b 4096 -C "you@example.com"
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa
cat ~/.ssh/id_rsa.pub         # Copy to GitHub SSH keys settings

# Use SSH remote
 git remote set-url origin git@github.com:username/repo.git
```

---

## 🛠️ Advanced Tools & Utilities

```bash
git cherry-pick <commit>                         # Apply specific commit to current branch
git bisect start                                 # Start binary search of bug

git archive -o archive.zip HEAD                  # Create zip of repo
git blame <file>                                 # Show who last modified each line
git shortlog -sn                                 # Contributor summary
git reflog                                        # Show all HEAD changes
```

---

## ✅ Best Practices

- Use branches for all new features/fixes
    
- Always pull before you push to avoid conflicts
    
- Use `.gitignore` and `.gitattributes` properly
    
- Keep commits atomic and messages meaningful
    
- Avoid force pushing shared branches
    
- Rebase cleanly before merging long-lived branches
    

---