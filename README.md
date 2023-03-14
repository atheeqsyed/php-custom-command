# Adding a CLI command using dependency injection

1. Create a Command class (the location is <your component root dir>/Console/Command).
2. Declare Command class in Magento\Framework\Console\CommandListInterface and configure the command name using dependency injection (<component root dir>/etc/di.xml):

3. Clean the cache
bin/magento cache:clean:

4.Regenrate the code 
bin/magento setup:di:compile:

Result
the new command Send:Aramex that accepts a --OrderId parameter is ready to use.

bin/magento Send:Aramex --OrderId='000001'

![Screenshot from 2023-03-14 22-31-25](https://user-images.githubusercontent.com/99461347/225103555-fa016ca7-a422-48d0-9d5b-27f166c7075a.png)


