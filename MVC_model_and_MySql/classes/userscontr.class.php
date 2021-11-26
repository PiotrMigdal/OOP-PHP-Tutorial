    <?php

    class UsersContr extends Users {
        public function createUser($username, $name)
        {
            $this->setUser($username, $name);
        }

    }