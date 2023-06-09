---
title: npm-explain
section: 1
description: Explain installed packages
---

### Synopsis

<!-- AUTOGENERATED USAGE DESCRIPTIONS -->

### Description

This command will print the chain of dependencies causing a given package
to be installed in the current project.

If one or more package specs are provided, then only packages matching
one of the specifiers will have their relationships explained.

The package spec can also refer to a folder within `./node_modules`

For example, running `npm explain glob` within npm's source tree will show:

```bash
glob@7.1.6
node_modules/glob
  glob@"^7.1.4" from the root project

glob@7.1.1 dev
node_modules/tacks/node_modules/glob
  glob@"^7.0.5" from rimraf@2.6.2
  node_modules/tacks/node_modules/rimraf
    rimraf@"^2.6.2" from tacks@1.3.0
    node_modules/tacks
      dev tacks@"^1.3.0" from the root project
```

To explain just the package residing at a specific folder, pass that as the
argument to the command.  This can be useful when trying to figure out
exactly why a given dependency is being duplicated to satisfy conflicting
version requirements within the project.

```bash
$ npm explain node_modules/nyc/node_modules/find-up
find-up@3.0.0 dev
node_modules/nyc/node_modules/find-up
  find-up@"^3.0.0" from nyc@14.1.1
  node_modules/nyc
    nyc@"^14.1.1" from tap@14.10.8
    node_modules/tap
      dev tap@"^14.10.8" from the root project
```

### Configuration
<!-- AUTOGENERATED CONFIG DESCRIPTIONS -->

### See Also

* [package spec](/using-npm/package-spec)
* [npm config](/commands/npm-config)
* [npmrc](/configuring-npm/npmrc)
* [npm folders](/configuring-npm/folders)
* [npm ls](/commands/npm-ls)
* [npm install](/commands/npm-install)
* [npm link](/commands/npm-link)
* [npm prune](/commands/npm-prune)
* [npm outdated](/commands/npm-outdated)
* [npm update](/commands/npm-update)
