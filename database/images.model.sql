CREATE TABLE IF NOT EXISTS public."images" (
  id               uuid        PRIMARY KEY DEFAULT gen_random_uuid(),
  item_id          uuid        NOT NULL REFERENCES public."items"(id) ON DELETE CASCADE,
  filename         varchar(255) NOT NULL,
  filepath         varchar(500) NOT NULL,
  mimetype         varchar(50)  NOT NULL,
  size_bytes       int          NOT NULL,
  type             varchar(50)  NOT NULL,
  created_at       timestamptz  NOT NULL DEFAULT now()
);
